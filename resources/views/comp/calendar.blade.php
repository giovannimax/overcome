<?php
/**
*@author  Xu Ding
*@email   thedilab@gmail.com
*@website http://www.StarTutorial.com
**/
//ini_set('memory_limit', '-1');
date_default_timezone_set('Asia/Hong_Kong');

use App\Http\Controllers\EcounselingsController;
use App\Http\Controllers\AvailabilityController;

class Calendar {  
     
    /**
     * Constructor
     */
    public function __construct(){     
        $this->naviHref = htmlentities("/calendar");
    }
     
    /********************* PROPERTY ********************/  
    private $dayLabels = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
     
    private $currentYear=0;
     
    private $currentMonth=0;
     
    private $currentDay=0;
     
    private $currentDate=null;
     
    private $daysInMonth=0;
     
    private $naviHref= null;
     
    /********************* PUBLIC **********************/  
        
    /**
    * print out the calendar
    */
    public function show() {
        $year  = null;
         
        $month = null;
         
        if(null==$year&&isset($_GET['year'])){
 
            $year = $_GET['year'];
         
        }else if(null==$year){
 
            $year = date("Y",time());  
         
        }          
         
        if(null==$month&&isset($_GET['month'])){
 
            $month = $_GET['month'];
         
        }else if(null==$month){
 
            $month = date("m",time());
         
        }                  
         
        $this->currentYear=$year;
         
        $this->currentMonth=$month;
         
        $this->daysInMonth=$this->_daysInMonth($month,$year);  
         
        $content='<div id="calendar">'.
                        '<div class="box">'.
                        $this->_createNavi().
                        '</div>'.
                        '<div class="box-content">'.
                                '<div class="label weekcont">'.$this->_createLabels().'</div>';
                                 
                                $weeksInMonth = $this->_weeksInMonth($month,$year);
                                // Create weeks in a month
                                for( $i=0; $i<5; $i++ ){
                                     
                                    $content.="<div class='weekcont'>";
                                    //Create days in a week
                                    for($j=1;$j<=7;$j++){
                                        $content.="<div class='daycont'>";
                                        $content.=$this->_showDay($i*7+$j);
                                        $content.="</div>";
                                    }

                                    $content.="</div>";
                                }
                                 
                                 
                                $content.='<div class="clear"></div>';     
             
                        $content.='</div>';
                 
        $content.='</div>';
        return $content;   
    }
     
    /********************* PRIVATE **********************/ 
    /**
    * create the li element for ul
    */
    private function _showDay($cellNumber){
         
        if($this->currentDay==0){
             
            $firstDayOfTheWeek = date('w',strtotime($this->currentYear.'-'.$this->currentMonth.'-02'));
                     
            if(intval($cellNumber) == intval($firstDayOfTheWeek)){
                 
                $this->currentDay=1;
                 
            }
        }
         
        if( ($this->currentDay!=0)&&($this->currentDay<=$this->daysInMonth) ){
             
            $this->currentDate = date('Y-m-d',strtotime($this->currentYear.'-'.$this->currentMonth.'-'.($this->currentDay)));
             
            $cellContent = $this->currentDay;
             
            $this->currentDay++;   
             
        }else{
             
            $this->currentDate =null;
 
            $cellContent=null;
        }

        $hdr = '';

        if(date('Y-m-d')==$this->currentDate){
            $hdr = '" class="bg-info text-light dday';
        }

        $daystrip = '<div class="daystripcont">';
        $dayclass = 'class="daylabell"';
        if(!empty($this->currentDate)){
            $hdr = '" class="dday';
            $dayclass = 'class="daylabel"';
            if(date('Y-m-d')==$this->currentDate){
                $daystrip = '<div class="daystripcont bg-info">';
                $dayclass = 'class="daylabel text-light"';
            }

            
        $availl = AvailabilityController::getavailspefdate($this->currentDate);
        //print_r($availl);
          /*for($i=1;$i<=24;$i++){

                $color= substr(str_shuffle('AABBCCDDEEFF00112233445566778899AABBCCDDEEFF00112233445566778899AABBCCDDEEFF00112233445566778899'), 0, 6);
               
                $daystrip=$daystrip."<div class='daystrip' style='background-color:#".$color.";'></div>";

            }*/
            if($availl!=0){
                if($availl>1)
                    $daystrip=$daystrip."<div class='daystrip' style='color: red;'>".$availl." <i class='material-icons' style='font-size: 17px;'>alarm_off</i></div>";
                else
                    $daystrip=$daystrip."<div class='daystrip' style='color: red;'> ".$availl." <i class='material-icons' style='font-size: 17px;'>alarm_off</i></div>";
            }
            $pps='';
            $result = EcounselingsController::givepeople($this->currentDate);
            if(count($result)>0){
            foreach($result as $res){
                $pps.='&nbsp;<img src="images/pp.jpg" class="rounded-circle calimg" id="calimg">';
            }

        }



                    $daystrip.='</div>';
            return '<a href="#" class="calday"><div '.$dayclass.' onclick=toggleleftsidebar("'.$this->currentDate.'",this);>&nbsp;&nbsp;'.$cellContent.$pps.$daystrip.'</div></a>';
         }

        else {
            $daystrip.='</div>';
            return '<div href="#" class="calday"><div '.$dayclass.'"); id="li-'.$this->currentDate.$hdr.($cellNumber%7==1?' start ':($cellNumber%7==0?' end ':' ')).
                ($cellContent==null?'mask':'').'">&nbsp;&nbsp;'.$cellContent.$daystrip.'</div></div>';
        }

}
     
    /**
    * create navigation
    */
    private function _createNavi(){
         
        $nextMonth = $this->currentMonth==12?1:intval($this->currentMonth)+1;
         
        $nextYear = $this->currentMonth==12?intval($this->currentYear)+1:$this->currentYear;
         
        $preMonth = $this->currentMonth==1?12:intval($this->currentMonth)-1;
         
        $preYear = $this->currentMonth==1?intval($this->currentYear)-1:$this->currentYear;
         
        return
            '<div class="header">'.
                '<a class="prev" href="'.$this->naviHref.'?month='.sprintf('%02d',$preMonth).'&year='.$preYear.'">Prev</a>'.
                    '<span class="title">'.date('F Y',strtotime($this->currentYear.'-'.$this->currentMonth.'-1')).'</span>'.
                '<a class="next" href="'.$this->naviHref.'?month='.sprintf("%02d", $nextMonth).'&year='.$nextYear.'">Next</a>'.
            '</div>';
    }
         
    /**
    * create calendar week labels
    */
    private function _createLabels(){  
                 
        $content='';
         
        foreach($this->dayLabels as $index=>$label){
             
            $content.='<div class="daycont daytext '.($label==6?'end title':'start title').' title">'.$label.'</div>';
 
        }
         
        return $content;
    }
     
     
     
    /**
    * calculate number of weeks in a particular month
    */
    private function _weeksInMonth($month=null,$year=null){
         
        if( null==($year) ) {
            $year =  date("Y",time()); 
        }
         
        if(null==($month)) {
            $month = date("m",time());
        }
         
        // find number of days in this month
        $daysInMonths = $this->_daysInMonth($month,$year);
         
        $numOfweeks = ($daysInMonths%7==0?0:1) + intval($daysInMonths/7);
         
        $monthEndingDay= date('N',strtotime($year.'-'.$month.'-'.$daysInMonths));
         
        $monthStartDay = date('N',strtotime($year.'-'.$month.'-01'));
         
        if($monthEndingDay<$monthStartDay){
             
            $numOfweeks++;
         
        }
         
        return $numOfweeks;
    }
 
    /**
    * calculate number of days in a particular month
    */
    private function _daysInMonth($month=null,$year=null){
         
        if(null==($year))
            $year =  date("Y",time()); 
 
        if(null==($month))
            $month = date("m",time());
             
        return date('t',strtotime($year.'-'.$month.'-01'));
    }
     
}

 
?>

