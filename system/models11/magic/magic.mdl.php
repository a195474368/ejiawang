<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: magic.mdl.php 3053 2014-01-15 02:00:13Z youyi $
 */

class Mdl_Magic_Magic extends Model 
{
    

    public function sitecount()
    {
    	if(!$sitecount = $this->cache->get('site-info-count')){
    		$sitecount = array('member'=>0, 'designer'=>0, 'company'=>0, 'shop'=>0, 'home'=>0, 'case'=>0);
    		$sitecount['member'] = K::M('member/view')->count();
    		$sitecount['designer'] = K::M('designer/designer')->count();
    		$sitecount['company'] = K::M('company/company')->count();
    		$sitecount['shop'] = K::M('shop/shop')->count();
    		$sitecount['home'] = K::M('home/main')->count();
    		$sitecount['case'] = K::M('case/case')->count();
    		$this->cache->set('site-info-count', $sitecount, 86400);
    	}
    	return $sitecount;
    }
}