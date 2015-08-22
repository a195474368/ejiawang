<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: gold.mdl.php 2034 2013-12-07 03:08:33Z langzhong $
 */

Import::M('member/base');
class Mdl_Member_Gold extends Mdl_Member_Base
{   
    

    public function update($uid, $gold, $log='')
    {

    	if(!$gold = (int)$gold){
    		$this->err->add('更变的金币值非法', 411);
    	}else if(empty($log)){
    		$this->err->add('未指定金币修改备注', 412);
    	}else{
    		$sql = "UPDATE ".$this->table($this->_table)." SET `gold`=`gold`+{$gold} WHERE uid='$uid'";
    		if($this->db->Execute($sql)){
    			K::M('member/log')->log($uid, 'gold', $gold, $log);
				return true;
    		}           
    	}
		return false;
    }
}