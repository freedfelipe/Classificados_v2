<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class MY_Form_validation extends CI_Form_validation {
		
		public function __construct()
		{
			parent::__construct();
			$this->CI =& get_instance();
		}
		
		/**
		* Error Array
		*
		* Returns the error messages as an array
		*
		* @return  array
		*/
		public function error_array()
		{
			if (count($this->_error_array) === 0)
			{
			 return FALSE;
			}
			else
			   return $this->_error_array;
		
		}
		
		public function valid_cnpj($str, $field)
		{
			
			$this->set_message('valid_cnpj', 'O %s não é válido');
			
			if(empty($str))
			{
				$this->set_message('valid_cnpj', 'O %s não pode estar vazio');
				return FALSE;
			}
			
			if(!preg_match('|^(\d{2,3})\.?(\d{3})\.?(\d{3})\/?(\d{4})\-?(\d{2})$|', $str, $matches))
			{
				$this->set_message('valid_cnpj', 'O %s não é válido');
                return FALSE;
            }
			else
			{
            
                array_shift($matches);
                
                $str = implode('', $matches);
                if (strlen($str) > 14)
                $str = substr($str, 1);
                
                $sum1 = 0;
                $sum2 = 0;
                $sum3 = 0;
                $calc1 = 5;
                $calc2 = 6;
                
                for ($i=0; $i <= 12; $i++)
				{
                    $calc1 = $calc1 < 2 ? 9 : $calc1;
                    $calc2 = $calc2 < 2 ? 9 : $calc2;
                    
                    if ($i <= 11)
                    $sum1 += $str[$i] * $calc1;
                    
                    $sum2 += $str[$i] * $calc2;
                    $sum3 += $str[$i];
                    $calc1--;
                    $calc2--;
                }
                
                $sum1 %= 11;
                $sum2 %= 11;
                
                return ($sum3 && $str[12] == ($sum1 < 2 ? 0 : 11 - $sum1) && $str[13] == ($sum2 < 2 ? 0 : 11 - $sum2)) ? TRUE : FALSE;
            }	
			
		}
		
		public function check_date($str)
		{
			$this->set_message('check_date', 'Data inválida.');
			$str = explode('/',$str);
			
			return checkdate ($str[1], $str[0], $str[2]);		
			
		}
		

		
		public function validator_data_between($start_date,$end_date)
		{
			//printr($this->CI);
			$this->set_message('validator_data_between', 'A data inicial '.$start_date.' está maior que a final '.$end_date);
			$start_date = strtotime(br_mysql_date($start_date));
			$end_date 	= strtotime(br_mysql_date($end_date));
			
	
			if($end_date < $start_date)return FALSE;
			return TRUE;
			
		}
		
		public function activation_validator_data_between($end_date,$start_date)
		{
			
			$this->set_message('activation_validator_data_between', 'A data inicial '.$start_date.' está maior que a final '.$end_date);
			$start_date = strtotime(br_mysql_date($start_date));
			$end_date 	= strtotime(br_mysql_date($end_date));
			
	
			if($end_date < $start_date)return FALSE;
			return TRUE;
			
		}
		
		public function valid_cpf($str)
		{
			$str = only_numbers($str);
			$this->set_message('valid_cpf', 'O CPF não é válido.');
			$str = str_pad(preg_replace('[^0-9]', '', $str), 11, '0', STR_PAD_LEFT);	
			if (strlen($str) != 11 || $str == '00000000000' || $str == '11111111111' || $str == '22222222222' || $str == '33333333333' || $str == '44444444444' || $str == '55555555555' || $str == '66666666666' || $str == '77777777777' || $str == '88888888888' || $str == '99999999999')
			{
				return FALSE;
			}
			else
			{   // Calcula os números para verificar se o CPF é verdadeiro
				for ($t = 9; $t < 11; $t++)
				{
					for ($d = 0, $c = 0; $c < $t; $c++)
					{
						$d += $str{$c} * (($t + 1) - $c);
					}			
					$d = ((10 * $d) % 11) % 10;			
					if ($str{$c} != $d)
					{
						return FALSE;
					}
				}			
				return TRUE;
			}
		}
		
		public function is_unique($str, $field)
		{
			if (substr_count($field, '.')==3)
			{
				list($table,$field,$id_field,$id_val) = explode('.', $field);
				$query = $this->CI->db->limit(1)->where($field,$str)->where($id_field.' != ',$id_val)->get($table);
			}
			else
			{
				list($table, $field)=explode('.', $field);
				$query = $this->CI->db->limit(1)->get_where($table, array($field => $str));
			}		
			return $query->num_rows() === 0;
		}
		
		public function paper_validation()
		{
			if($_POST['paper']){
				
				$preco = false;
				$canal = false;
				
				$data = $_POST['paper'];
				
				# validando se os papeis estao zerados
				foreach($data as $k => $v){
					
					if($v['value'] != '0,00'){
						$preco = true;
					}
					
					if(isset($v['channel']) and is_array($v['channel'])){
						$canal = true;
					}
					
				}
				
				if($preco == false){
					$this->set_message('paper_validation','Preencha o campo de preço.');
				}elseif($canal == false){
					$this->set_message('paper_validation', 'Selecione o canal.');
				}else{
					return true;
				}
			}
			
			return false;
		}

		
	}