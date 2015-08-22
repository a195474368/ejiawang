<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: item.mdl.php 2961 2014-01-10 01:58:09Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Block_Item extends Mdl_Table
{   
  
    protected $_table = 'block_item';
    protected $_pk = 'item_id';
    protected $_cols = 'item_id,block_id,itemId,title,link,thumb,city_ids,data,expire_time,orderby,dateline';
    protected $_orderby = array('orderby'=>'ASC', 'item_id'=>'DESC');

    public function items_by_block($block_id, $page=1, $limit=50, &$count=0)
    {
        return $this->items(array('block_id'=>$block_id), $this->_orderby, $page, $limit, $count);
    }

    public function create($data, $checked=false)
    {
        if(!$checked && !$data = $this->_check($data)){
            return false;
        }
        $data['dateline'] = __CFG::TIME;
        if($item_id = $this->db->insert($this->_table, $data, true, true)){
            $this->flush($data['block_id']);
        }
        return $item_id;
    }

    public function update($pk, $data, $checked=false)
    {
        if(!$checked && !$data = $this->_check($data,  $pk)){
            return false;
        }
        if($ret = $this->db->update($this->_table, $data, $this->field($this->_pk, $pk))){
            $this->flush($data['block_id']);
        }
        return $ret;
    }
    
    public function delete($val, $force=false)
    {
        if($items = $this->items_by_ids($val)){
            $block_ids = array();
            foreach($items as $item){
                $block_ids[$item['block_id']] = $item['block_id'];
            }
            parent::delete($val, $force);
            foreach($block_ids as $id){
                $this->flush($id);
            }
        }
        return true;
    }

    protected function _format_row($row)
    {
        if($row['data']){
            $row['data'] = unserialize(stripslashes($row['data']));
        }
        $row['city_ids'] = explode(',', $row['city_ids']);
        return $row;
    }

    public function flush($block_id=null)
    {
        if(!$block_id){
            return false;
        }
        return $this->cache->delete($this->_pre_cache_key."-{$block_id}");        
    }

    public function update_expire()
    {
        $time = __CFG::TIME-8600;
        $sql = "DELETE FROM ".$this->table($this->_table)." WHERE expire_time>0 AND expire_time<$time";
        return $this->db->Execute($sql);
    }

    protected function _check($data, $item_id=null)
    {
        if(!$item_id || isset($data['title'])){
            if(empty($data['title'])){
                $this->err->add('标题不能为空', 451);
                return false;
            }
        }
        if(!$item_id || isset($data['block_id'])){
            if(!$data['block_id'] = intval($data['block_id'])){
                $this->err->add(' 未指定要保存到的推荐位', 452);
                return false;
            }
        }
        if(isset($data['city_ids'])){
            if(is_array($data['city_ids'])){
                $data['city_ids'] = implode(',', $data['city_ids']);
            }
        }
        if(isset($data['data'])){
            $data['data'] = addslashes(serialize($data['data']));
        }
        if(isset($data['expire_time'])){
            if(empty($data['expire_time'])){
                $data['expire_time'] = 0;                
            }else{
                $data['expire_time'] = strtotime($data['expire_time']);
            }
        }
        if(isset($data['orderby'])){
            $data['orderby'] = (int)$data['orderby'];
        }
        return parent::_check($data);       
    }      
}