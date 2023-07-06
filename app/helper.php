<?php  


use App\Models\SeoSetting;
use App\Models\SiteSetting;
use App\Models\Category;
use App\Models\MedsProduct;
use App\Models\MedsKeyword;

 function seo($url)
{
	$data = SeoSetting::where('url',$url)->first();
		return $data;
}

function site_setting()
{
	$data = SiteSetting::find(1);
	return $data;
}

function top_category()
{
	$data = Category::whereStatus(1)->where('top',1)->get();
	return $data;
}

function getMedicineImages($id){
      $medsProducts = MedsProduct::where('c_2_1_1_generic_id_no',$id)->orderBy('c_2_1_4_display_at')->get();
        $medsImages = [];
        $medsImages =   $medsProducts->map(function($med)   {
            $medsImages1 = [];
             if(!empty($med->meds_price)){
                if(!is_null($med->meds_price->generic_med_image) && !empty($med->meds_price->generic_med_image)){
                    array_push($medsImages1, $med->meds_price->generic_med_image);
                } 
                 if(!is_null($med->meds_price->branded_med_image) && !empty($med->meds_price->branded_med_image)){
                    array_push($medsImages1, $med->meds_price->branded_med_image);
                }    
                if(!empty($medsImages1)){
                return $medsImages1;
                }

             // return $med->meds_price->c_2_2_36_b_full_image.'#$'.$med->meds_price->c_2_2_14_g_full_image;
            }
             })->toArray();
             $medsImages =  array_filter($medsImages);
             
             return $medsImages;
}


 function generic_drugs()
{
        $allMedicine = MedsKeyword::get();
         $genric_medcines = $allMedicine->sortBy('other_names')->groupBy(function ($item, $key) {
                 return strtoupper(substr($item['other_names'], 0, 1));
            })->toArray();
        ksort($genric_medcines);

        return $genric_medcines ;
}

 function all_drugs()
{
        $allMedicine = MedsKeyword::get();
        
         $all_medcines = $allMedicine->unique('generic_name')->sortBy('generic_name')->groupBy(function ($item, $key) {
                 return strtoupper(substr($item['generic_name'], 0, 1));
            })->toArray();
        ksort($all_medcines);
      

        return $all_medcines ;
}
?>