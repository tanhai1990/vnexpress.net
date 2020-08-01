<?php
class Database{
        //Khai báo thuộc tính
        private $conn = null;
        private $host = 'localhost';
        private $user = 'root';
        private $password = '';
        private $data = 'vnexpress';
        private $result = null;
    
        //Xay dung cac phuong thuc
        private function connect(){
            $this->conn = new mysqli($this->host, $this->user, $this->password, $this->data)
            or die('Ket noi khong thanh cong');
            $this->conn->query('set names UTF8');
        }
    
        //Phuong thuc select du lieu:
        public function Select($sql){
            $this->connect();
            $this->result = $this->conn->query($sql);
        }
    
        public function Fetch(){
            if($this->result->num_rows>0){
                $rows = $this->result->fetch_assoc();
            }else{
                $rows = 0;
            }
            return $rows;
        }
    
        //Phuong thuc chung cho insert, update, delete
        public function Command($sql){
            $this->connect();
            $this->conn->query($sql);
        }

        public function stripUnicode($str){
            if($str){
                $unicode = array(
                    'a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
                    'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
                    'd'=>'đ',
                    'D'=>'Đ',
                    'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
                    'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
                    'i'=>'í|ì|ỉ|ĩ|ị',
                    'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
                    'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
                    'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
                    'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
                    'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
                    'y'=>'ý|ỳ|ỷ|ỹ|y',
                    'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ'
                );
                foreach($unicode as $khongDau=>$coDau){
                    $arr = explode("|",$coDau);
                    $str = str_replace($arr, $khongDau, $str);
                }
                return $str;
            }
            else return false;
        }
        
        //Chuyển đổi chữ có dấu sang không dấu
        public function changeTitle($str){
            $str = trim($str);
            if($str=="") return "";
            $str = str_replace('"','',$str);
            $str = str_replace("'",'',$str);
            $str = $this->stripUnicode($str);
            
            //
            $str = mb_convert_case($str, MB_CASE_TITLE, 'utf-8');
            $str = str_replace(' ','-',$str);
            
            return $str;
        }
        
        //Kiểm tra giá trị có Null hay không
        public function checkNull($s){
            if(!empty($s)){
                return true;
            }
            else{
                return false;
            }
        }

        //Kiểm tra xem giá trị có phải là số hay không
        public function checkNumber($number){
            if(is_numeric($number)){
                return true;
            }
            else{
                return false;
            }
        }
    
}










?>