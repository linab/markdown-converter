<?php
// PHP Markdown Converter by Elina Beniaminov
class Converter {
    
    // Receive markdown form data
    public function parseMarkdown($data){
        $response['message'] = 'Initializing markdown conversion.';
        if(isset($data)){
            // Break lines into an array
            $line_array = preg_split('/\r\n|\r|\n/', $data);
            $response = '';
            // Loop through each line submitted and convert markdown into html
            foreach($line_array as $line){
                //If completely blank line then skip generating html
                if($line == ""){
                    continue;
                }
                $check_headers = $this->parseHeaders($line);
                $response .= $check_headers;
            };
        } else {
            $response['message'] = 'Markdown data could not be converted. Please try again.';
        }
        $result = json_encode($response);
        return $result;
    }

    // Organize and clean headers
    public function parseHeaders($line){
        // Count occurances of # within a line and reflect in H-tag
        $count_char = substr_count($line, '#');
        // Return # occurances counted;
        if($count_char > 0 && $count_char <= 6){
            $line = str_replace('#', '', $line);
            $line = substr($line, 1);
            $line = $this->parseLinks($line);
            return '<h'.$count_char.'>'. $line .'</h'.$count_char.'>';
        } elseif( $count_char > 6){
            // More than 6 headings do not exist, turn into p tag
            $line = str_replace('#', '', $line);
            $line = substr($line, 1);
        }
        //Return default line data
        $line = $this->parseLinks($line);
        return '<p>' . $line . '</p>';
    }

    /*  Parse link markup such as:
        [Mailchimp](https://www.mailchimp.com)
    */
    public function parseLinks($line){
        // Find link and copy in string
        $link_copy = preg_replace('/\[(.*?)\]\s*\(((?:http:\/\/|https:\/\/)(?:.+))\)/', '<a href="$2">$1</a>', $line);
        return $link_copy;
    }

} ?>