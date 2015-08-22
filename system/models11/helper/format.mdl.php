<?php
/**
 * Copy	Right Anhuike.com
 * $Id format.mdl.php shzhrui<anhuike@gmail.com>
 */

class Mdl_Helper_Format
{
	
	/**
	 * 格式化输出字节数 {GB,MB,KB,Bytes}
	 * @param	$size	字节数单位bytes
	 * @return string	
	 */
	static public function size($size)
	{
		if($size >= 1073741824) {
			$size = round($size / 1073741824 * 100) / 100 . ' GB';
		} elseif($size >= 1048576) {
			$size = round($size / 1048576 * 100) / 100 . ' MB';
		} elseif($size >= 1024) {
			$size = round($size / 1024 * 100) / 100 . ' KB';
		} else {
			$size = $size . ' Bytes';
		}
		return $size;		
	}

	static public function price($price)
	{
		
	}

	static public function time($time, $format='')
	{
		
		if($format){
			return date($format,$time);
		}
		$s = date('Y-m-d',$time);
		$sdaytime = K::$system->sdaytime;
		$stime = __CFG::TIME - $time;
		
			return '<span title="'.$s.'">'.$s.'</span>';
		
	}

    static public function microtime($time=0)
    {
        $time = $time ? $time : explode(' ',microtime());
        return date('Y-m-d H:i:s',$time[0]).",{$time[1]}毫秒";
    }
}