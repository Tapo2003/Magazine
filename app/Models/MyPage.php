<?php

namespace App\Models;



class MyPage
{
    public function make_links($url,$curPage,$butno = 2){
        $curPage = $curPage ? (int)$curPage : 1;     
        $start = $curPage - $butno;
       
        $end = $curPage + $butno;
       
        if($start < 1){
            $start = 1;
        }
        
        $buttons = array();
        $buttons[] = [
            '<li>
                <span aria-hidden="true">&laquo;</span>
            </li>',
            preg_replace('/page=[0-9]+/','page=1',$url),
            0
        ];
        $num = $curPage + 1;
        for ($i=$start; $i <= $end; $i++) {     
            // if($i == 1){
            //     continue;
            // }
            $myurl = preg_replace('/page=[0-9]+/','page='.$i,$url);
            $active = 0;
            if($i == $curPage){
                $active = 1;
            }
            $buttons[] = [$i,$myurl,$active];
            $num = $i;
            # code...
        }
        $buttons[] = [
            'Next',
            preg_replace('/page=[0-9]+/','page='.($num + $butno),$url),
            0
        ];
        return $buttons;

    }

}