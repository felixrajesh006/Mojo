<link data-jsfiddle="common" rel="stylesheet" media="screen" href="webroot/dist/handsontable.css">
<link data-jsfiddle="common" rel="stylesheet" media="screen" href="webroot/dist/pikaday/pikaday.css">
<script data-jsfiddle="common" src="webroot/dist/pikaday/pikaday.js"></script>
<script data-jsfiddle="common" src="webroot/dist/moment/moment.js"></script>
<script data-jsfiddle="common" src="webroot/dist/zeroclipboard/ZeroClipboard.js"></script>
<script data-jsfiddle="common" src="webroot/dist/numbro/numbro.js"></script>
<script data-jsfiddle="common" src="webroot/dist/numbro/languages.js"></script>
<script data-jsfiddle="common" src="webroot/dist/handsontable.js"></script>
<script data-jsfiddle="common" src="webroot/dist/fSelect.js"></script>
<link data-jsfiddle="common" rel="stylesheet" media="screen" href="webroot/dist/fSelect.css">
<script src="webroot/js/samples.js"></script>
<script src="webroot/js/validation_new.js"></script>
<script src="webroot/js/highlight/highlight.pack.js"></script>
<link rel="stylesheet" media="screen" href="webroot/js/highlight/styles/github.css">
<link rel="stylesheet" href="webroot/css/font-awesome/css/font-awesome.min.css">
<?php

//pr($processinputdata); //exit;
use Cake\Routing\Router;

if ($NoNewJob == 'NoNewJob') {
    ?>
<div align="center" style="color:green;">
    <b>
    <?php echo 'No New Job Available Now! <br> Check Later to have new job!'; ?>
    </b>
    <br><br>
</div>
    <?php
} else if ($this->request->query['job'] == 'completed' || $this->request->query['job'] == 'Query') {
    ?>
<div align="center" style="color:green;">
    <b>
            <?php
            if ($this->request->query['job'] == 'completed')
                echo 'Job completed.<br>';
            else
                echo 'Query Posted Successfully.<br>';
            ?>
    <?php echo 'Click Get Job Button to get new Job'; ?>
    </b>
    <div style="margin:0px 0px 5px 0px;">
        <button class="btn btn-default btn-sm" type="button" onclick="getJob()">Get Job</button>
    </div>
</div>
<?php
} else if ($getNewJOb == 'getNewJOb') {
    echo $this->Form->create('', array('class' => 'form-horizontal', 'id' => 'projectforms'));
    ?>
<div align="center" style="color:green;">
    <b>
            <?php echo 'Click Get Job Button to get new Job'; ?>
    </b>
    <div style="margin:0px 0px 5px 0px;">
    <?php echo $this->Form->button('GetJob', array('id' => 'NewJob', 'name' => 'NewJob', 'value' => 'NewJob', 'class' => 'btn btn-default btn-sm')); ?>
    </div>
</div>
    <?php
    echo $this->Form->end();
} else {
    //echo $this->Form->create('',array('class'=>'form-horizontal','id'=>'projectforms','name'=>'getjob'));
    ?>
<!--    <div id="example" class="container-fluid" style="margin-bottom:-10px;">-->
<!-- Project List Starts -->

<script>
    Breakpoints();
</script>
<style type="text/css">
    .modal-footer{border-top: 1px solid #e4eaec;}
    .modal-header{border-bottom: 1px solid #e4eaec;}
    .query{vertical-align:top;margin-right:30px;}
    body{padding-top:60px !important;}
    
    .site-menu-sub .site-menu-item > a{padding:0 !important;}
    .nav.navbar-toolbar.navbar-right.navbar-toolbar-right .dropdown-menu{left:auto !important;}
    .navbar-mega .dropdown-menu{left: 0px !important;width: 200px !important;}
    ul.site-menu-sub.site-menu-normal-list{    padding-left: 20px !important;}
    .site-menu-sub .site-menu-item > a:hover {
        color: rgba(179, 174, 174, 0.8) !important;
        background-color: rgba(255, 255, 255, .02);
    }
    .vsplitbar {
        width: 4px;
        background: #e4eaec;
    }
    textarea{border:1px solid #e4eaec;resize:none;}
    
    /*        iframe{border:none;width:100%;height: 369px;}*/
    object{height: 81% !important;
           position: absolute;}
    /*    object{border:none;width:100%;height: 369px;}*/
    
    .badge{display: inline-block;
           min-width: 10px;
           padding: 3px 7px;
           font-size: 12px;
           font-weight: 700;
           line-height: 1;
           color: #fff;
           text-align: center;
           white-space: nowrap;
           vertical-align: middle;
           background-color: #777;
           border-radius: 10px;}
    
    .lblcolor{color:#b7b7b7 !important;}

    /* ----------------------------------------------- */
    /* Fold out side bar using Canvas starts */
    /* ----------------------------------------------- */

    .offcanvas {
        position: fixed;
        z-index: 9999;
        display: none;
        transform: translate3d(0, 0, 0);
        transition: transform 800ms cubic-bezier(0.645, 0.045, 0.355, 1)
    }

    .offcanvas--top {
        top: -360px;
        left: 0;
        width: 100vw;
        height: 360px
    }

    .offcanvas--top--active { transform: translate3d(0, 360px, 0) }

    .offcanvas--right {
        top: 67px;
        right: -466px;
        width: 460px;
        height: 100vh;
    }

    .offcanvas--right--active { transform: translate3d(-466px, 0, 0);right:-466px; }

    .offcanvas--bottom {
        bottom: -360px;
        left: 0;
        width: 100vw;
        height: 360px
    }

    .offcanvas--bottom--active { transform: translate3d(0, -360px, 0) }

    .offcanvas--left {
        top: 0;
        left: -360px;
        width: 360px;
        height: 100vh;
    }

    .offcanvas--left--active { transform: translate3d(360px, 0, 0) }

    .offcanvas--initialized { display: block }
    #document-tag, #page-tag {
        /*        color: #fff;*/
        text-align: left;
        background-color: #f4f7f8;
        border: 1px solid #fff;
        box-shadow: 0px 0px 10px #5f5d5d;
    }
    
    .fa-chevron-circle-right{position:absolute;}
    .srcblock{border:1px solid #f4f7f8;padding:15px;margin-bottom:10px;word-wrap:break-word;}
    /*.panel-height{overflow: auto;
    max-height: 350px;}*/
    .hide{display:none;}

    .editable {
        border-color: #a0b6bd;
        box-shadow: inset 0 0 10px #a0b6bd;
        background: #ffffff;
    }

    .text {
        outline: none;
    }
    .text1{
        outline: none;
    }
    .text2{
        outline: none;
    }
    .multiple-height{
        min-height: 120px;
        max-height: 200px;
        overflow-y: auto;
    }
    .edit, .save {
        width: 30px;
        display: block;
        position: absolute;
        top: 0px;
        right: 10px;
        padding: 4px 0px;
        border-top-right-radius: 2px;
        border-bottom-left-radius: 10px;
        text-align: center;
        cursor: pointer;
    }
    .edit1, .save1 {
        width: 30px;
        display: block;
        position: absolute;
        top: 0px;
        right: 10px;
        padding: 4px 0px;
        border-top-right-radius: 2px;
        border-bottom-left-radius: 10px;
        text-align: center;
        cursor: pointer;
    }
    .edit2, .save2 {
        width: 30px;
        display: block;
        position: absolute;
        top: 0px;
        right: 10px;
        padding: 4px 0px;
        border-top-right-radius: 2px;
        border-bottom-left-radius: 10px;
        text-align: center;
        cursor: pointer;
    }
    .edit { 
        opacity: 0;
        transition: opacity .2s ease-in-out;
    }
    .edit1{ 
        opacity: 0;
        transition: opacity .2s ease-in-out;
    }
    .edit2{ 
        opacity: 0;
        transition: opacity .2s ease-in-out;
    }
    .save {
        opacity: 0;
        transition: opacity .2s ease-in-out;
    }
    /*    .save1 {
                display: none;
            }
            .save2 {
                display: none;
        }*/
    .box:hover .save {
        opacity: 1;
    }
    .box1:hover .edit1 {
        opacity: 1;
    }
    .box2:hover .edit2 {
        opacity: 1;
    }
    
    
    .spliticon{width:6px;height:45px;background:#000;right:0;margin-right: -5px;
               z-index: 999;top:40%;}
    .vsplitbar{z-index:0 !important;}
    .fixed-bottom{position: absolute;bottom: 0;width: 95%;}
    .view-sourcelink{line-height: 45px;
                     margin: 4px 0px;
                     position: fixed;
                     border-top: 1px solid #e4eaec;
                     bottom: 40px;
                     background: #fff;
                     width: 100%;
                     padding: 0px !important;
                     z-index: 999;}
    .fa-angle-double-left,.fa-angle-double-right{font-size:14px;background:#f2f2f2;border:1px solid #ccc;padding:3px 10px;margin-top:3px;cursor:pointer;margin-right:0 !important;}

    .form-control{ display: inline-block !important;width:94%;}
    .icon.fa.fa-user{ position: relative;
                      top: 0px;}

    li{display:inline;}

    #slidetrigger{
        width: 100px;
        height: 100px;
        background: grey;
        float: left;
        line-height: 100px;
        text-align: center;
        color: white;
        margin-bottom: 20px;
    }

    #slidecontent{
        width: 200px;
        display: none;
        height: 100px;
        float: left;
        padding-left: 10px;
        background: #F6953D;
        line-height: 100px;
        text-align: center;
    }

    .lighttext {
        font-size: 12px;
        color: #b1afaf;
        white-space: nowrap;
        width: 23em;
        overflow: hidden;
        text-overflow: ellipsis;
        float:left;
    }

   

   
    /* CSS for spliter*/
    dt {
        font: bold 14px Consolas, "Courier New", Courier, mono;
        color: steelblue;
        background-color: #f0f0f0;
        margin-top: 1.5em;
        padding: 0.2em 0.5em;
    }

    dd {
    }

    dd code {
        font: bold 12px Consolas, "Courier New", Courier, mono;
    }

    dd > code {
        display: block;
        color: #666666;
    }

    dd > code.default {
        color: #007700;
    }

    pre.codesample {
        font: bold 12px Consolas, "Courier New", Courier, mono;
        background: #ffffff;
        overflow: auto;
        width: 75%;
        border: solid gray;
        border-width: .1em .1em .1em .8em;
        padding: .2em .6em;
        margin: 0 auto;
        line-height: 125%
    }

    .splitter_panel > div {
        padding: 0 1em;
    }

    #splitter {

        height: 500px;
        border: 0px solid #666;
    }
    #splitter-left, #splitter-right{ padding:0px;}
    .splitter_container > .splitter_panel > :not(.splitter_container){overflow: none !important;}
    .panel-footer{height: 55px;
                  margin-top: 16px;}
   
    
    .splitter-vertical > .splitter_bar{width:4px !important;}
    .splitter_bar > .splitter_handle{    background-color: #000 !important;}


    /*Scrollbar customization for all page*/
    .scroll-wrapper {
        overflow: hidden !important;
        padding: 0 !important;
        position: relative;
    }
    .scroll-wrapper > .scroll-content {
        border: none !important;
        box-sizing: content-box !important;
        height: auto;
        left: 0;
        margin: 0;
        max-height: none !important;
        max-width: none !important;
        overflow: scroll !important;
        padding: 0;
        position: relative !important;
        top: 0;
        width: auto !important;}

    .scroll-wrapper > .scroll-content::-webkit-scrollbar {
        height: 0;
        width: 0;
    }
    .scroll-element {
        display: none;
    }
    .scroll-element, .scroll-element div {
        box-sizing: content-box;
    }
    .scroll-element .scroll-bar,
    .scroll-element .scroll-arrow {
        cursor: default;
    }
    ::-webkit-scrollbar { width: 7px; height: 10px;}
    /* Track */ ::-webkit-scrollbar-track { -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); -webkit-border-radius: 10px; border-radius: 10px; }
    /* Handle */ ::-webkit-scrollbar-thumb { -webkit-border-radius: 5px; border-radius: 5px;
                                             background: rgba(128, 128, 128,0.46);}
    
    
  .validationloader {
  border: 8px solid #f3f3f3;
  border-radius: 50%;
  border-top: 8px solid #62A8EA;
  border-bottom: 8px solid #62A8EA;
  width: 60px;
  height: 60px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
    display: block;
    position: absolute;
    z-index: 9999;
    margin: 130px 355px 0px 355px;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

    </style>

    <body class="animsition site-navbar-small app-work">
    <!-- Project List Starts -->
    <!-- Breadcrumb Starts -->

    <form name="ProductionArea" id="ProductionArea" method="post">
        <div class="panel-heading p-b-0">
            <div class="col-xxl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="page-header p-l-0 p-r-0">
                    <div class="projet-details">
                        <h3 class="page-title"><div class="col-md-8 font-size-14">
                        <?php 
                        $n= 0;
                        ?>
                          <div><b><?php  $n= 0; $prefix = '';
                        foreach ($staticFields as $key) { 
                            if(!empty($staticFields[$n])){
                          echo $prefix.$staticFields[$n];
                            $prefix = ' | '; 
                            }
                             $n++; 
                        }  
                        ?></b></div>

                    </div>
                            
                            <label class="pull-right font-size-14">Timer 
                                <span class="badge" id='countdown'>
                                    <div class="col-md-4">
                                            <?php
                                            if (empty($productionjob['TimeTaken']))
                                                $hrms[0] = '00:00:00';
                                            else
                                                $hrms = explode('.', $TimeTaken);
                                            ?><?php echo $hrms[0]; ?>
                                    </div>
                                </span>
                                <?php echo $this->Form->input('', array('type' => 'hidden', 'id' => 'TimeTaken', 'name' => 'TimeTaken', 'value' => $hrms[0])); ?>
                            </label>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
	<?php 
        //pr($processinputdata);exit;
        ?>	
        <!-- Breadcrumb Ends -->
        <div class="panel m-l-30 m-r-30">
            <div class="panel-body">
                <div id="splitter">
                    <span style="visibility: hidden;">a</span>
			<div style="float: right;">
                            <input type="checkbox" class="chk-wid-Url float-right" onclick="ShowUnVerifiedAtt()" id="chk-wid-Url2" value="2"> Hide Completed Fields 
                            <span style="display:none;">
			    <input type="checkbox" class="chk-wid-Url" onclick="checkAllUrlAtt()" id="chk-wid-Url" value="1"> Show Relevant Fields
                            </span>
			</div>
                    <div id="splitter-block">
                        <div id="splitter-left">
                            <!-- Example Tabs -->
                            <div class="example-wrap">
                                <div class="nav-tabs-horizontal">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" data-toggle="tab" href="#exampleTabsOne" aria-controls="exampleTabsOne" role="tab">Source</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-toggle="tab" href="#mainurl" aria-controls="mainurl" role="tab">Website</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-toggle="tab" href="#googletab" aria-controls="googletab" role="tab">Google Search</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="leftpane">
                                        <div class="tab-pane active" id="exampleTabsOne" role="tabpanel" style="display:none !important;">
                                            <object width="400" height="400" style="border:1px solid red;" data="http://php.net" type="application/html" archive="http://php.net">
                                            <object width="100%" onload="onMyFrameLoad(this)" height="100%" style="visibility:visible" id="frame1" name="frame1" data="" width="auto" height="auto"></object>

                                        </div>
                                        <div class="tab-pane" id="googletab" role="tabpanel">
                                            <div>
                                                <div class="goto"><a href="javascript: void(0);" onclick="$('#frame2').attr('data', 'https://www.google.com/ncr').hide().show();"> Go to Google </a></div>
                                                <div><object onload="onMyFrameLoad(this)" width="100%" height="100%" id="frame2" sandbox="" data="https://www.google.com/ncr"></object></div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="mainurl" role="tabpanel">
										 <iframe onload="onMyFrameLoad(this)" width="100%" height="100%" id="frame3" target='_parent' sandbox=""  src="<?php echo $getDomainUrl;?>" ></iframe>
                                           <!--<object onload="onMyFrameLoad(this)" width="100%" height="100%" id="frame3" sandbox="" data="<?php //echo $getDomainUrl; ?>" ></object> -->
                                           <?php if(empty($getDomainUrl)){
                                                echo '<p><span style="font-weight:bold">No Website found...</span></p>';
                                            }
                                           ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Example Tabs -->			
                        </div>
                        <div id="splitter-right">
                            <div>
                                <input type="hidden" name='ProductionId' id="ProductionId" value="<?php echo $productionjob['Id']; ?>">
                                <input class="UpdateFields" type="hidden" name='ProductionEntity' id="ProductionEntity" value="<?php echo $productionjob['ProductionEntity']; ?>">
                                <input class="UpdateFields" type="hidden" name='ProductionEntityID' id="ProductionEntityID" value="<?php echo $productionjob['ProductionEntity']; ?>">
                                <input type="hidden" name='StatusId' value="<?php echo $productionjob['StatusId']; ?>">
                                <input class="UpdateFields" type="hidden" name='RegionId' id='RegionId' value="<?php echo $productionjob['RegionId']; ?>">
                                <input class="UpdateFields" type="hidden" name="ProjectId" id="ProjectId" value="<?php echo $productionjob['ProjectId']; ?>">
                                <input class="UpdateFields" type="hidden" name="InputEntityId" id="InputEntityId" value="<?php echo $productionjob['InputEntityId']; ?>">

                                <input type="hidden" name="attrGroupId" id="attrGroupId">
                                <input type="hidden" name="attrSubGroupId" id="attrSubGroupId">
                                <input type="hidden" name="attrId" id="attrId">
                                <input type="hidden" name="ProjattrId" id="ProjattrId">
                                <input type="hidden" name="seq" id="seq">
                                <input type="hidden" name="refUrl" id="refUrl">

                                <div class="panel-group panel-group-continuous" id="exampleAccordionContinuous" aria-multiselectable="true" role="tablist">
                                      <div class="validationloader" style="display:none;"></div>
                                            <?php
                                            $i = 0;
                                            foreach ($AttributeGroupMaster as $key => $GroupName) {
                                                if ($i < 0) {
                                                    $ariaexpanded = 'aria-expanded="true"';
                                                    $collapseIn = "collapse in";
                                                    $collapsed = "";
                                                } else {
                                                    $ariaexpanded = 'aria-expanded="false"';
                                                    $collapseIn = "collapse";
                                                    $collapsed = "collapsed";
                                                }
                                                // code for validation
                                                $attr1['id'] = $key;
                                                $attr1['name'] = $GroupName;
                                                $attr1['sub'] = array();
                                                
                                                ?>
                                    <div class="panel">
                                        <div class="panel-heading" id="exampleHeadingContinuousOne<?php echo $i; ?>" role="tab">

                                            <a id='<?php echo $key; ?>' class="panel-title <?php echo $collapsed; ?>" data-parent="#exampleAccordionContinuous" data-toggle="collapse" href="#exampleCollapseContinuousOne<?php echo $i; ?>" aria-controls="exampleCollapseContinuousOne<?php echo $i; ?>" <?php echo $ariaexpanded; ?>>
        <?php echo $GroupName; ?>
                                                <span class="badge CntBadge" id="CntBadge_<?php echo $key; ?>"></span>
                                                <span class="pull-right m-r-45">Status : 
                                                    <span id="currentADMVDoneCnt_<?php echo $key; ?>"></span>/
                                                    <span id="totalAttInThisGrpCnt_<?php echo $key; ?>"></span>
                                                </span>
                                            </a>
                                        </div>
                                        <!--                                    ----------------------------first campaign start--------------------------------------->
                                        <div class="panel-collapse <?php echo $collapseIn; ?> CampaignWiseMainDiv" data="<?php echo $key; ?>" id="exampleCollapseContinuousOne<?php echo $i; ?>" aria-labelledby="exampleHeadingContinuousOne" role="tabpanel">
                                                        <?php
                                                      $attr_sub = array();
                                                        foreach ($AttributesListGroupWise[$key] as $keysub => $valuesSub) {
                                                            ?>

                                            <div class="panel-body panel-height subgroupparentdivs subgroupparentdivs_<?php echo $key; ?>" style="border:0px;">
                                                            <?php
                                                            //echo $keysub;
                                                            if ($keysub != 0) {
                                                                //  pr($distinct);
                                                                $isDistinct = '';
                                                                $isDistinct = array_search($keysub, $distinct);
                                                                ?>
                                                <div class="col-md-12 row-title" style="padding:0px;">
                                                <div class="col-md-6 row-title" style="padding:0px;">
                                                <label class="form-control-label font-weight-400"> <?php echo $AttributeSubGroupMasterJSON[$key][$keysub]; ?></label> 
                                                </div>
                                                    <div class="col-md-6 row-title" style="padding-right: 84px;">
                                                                <?php if ($isDistinct !== false) {
                                                                    ?>
                                                                 <i id="subgrp-add-field" style="margin-top:5px;" class="fa fa-plus-circle pull-right add-field m-l-10 m-r-5 addSubgrpAttribute" data="<?php echo $keysub; ?>" data-groupId="<?php echo $key; ?>" data-groupName="<?php echo $AttributeSubGroupMasterJSON[$key][$keysub]; ?>"></i> 
                                                                
                                                                    <?php
                                                                    //pr($GrpSercntArr);
                                                                    $GroupSeqCnt = $GrpSercntArr[$keysub]['MaxSeq'];
                                                                } else { ?>
                                                                    <i style="margin-top:5px; padding:1px;" class="pull-right m-r-25"></i> 
                                                                    <?php $GroupSeqCnt = 1;
                                                                }
                                                                ?>
                                                                  <select onchange="checkAll(<?php echo $key; ?>,<?php echo $keysub; ?>);" id="subgrp_<?php echo $key; ?>_<?php echo $keysub; ?>" class="subgrp_<?php echo $key; ?>_<?php echo $keysub; ?> pull-right m-l-10 m-r-5 form-control">
                                                                     <option value="">--</option>
                                                                      <option value="V">V</option>    
                                                                     <option value="D">D</option>    
                                                                 </select>
                                                
                                                <?php
                                                                if ($GroupSeqCnt > 1) {
                                                                     // code added developer01-b2l
                                                                   $pagination_validation_class = "ProductionFields_" . $DependentMasterIds['ProductionField'];
                                                                ?>
                                                <i id= "next_<?php echo $keysub; ?>" class="fa fa-angle-double-right pull-right m-r-5 <?php echo $pagination_validation_class; ?> validation_error_pagination" style="color:#4397e6"  onclick="Paginate('next', '<?php echo $keysub; ?>', '<?php echo $GroupSeqCnt; ?>');"></i> 
                                                <i id="previous_<?php echo $keysub; ?>" class="fa fa-angle-double-left pull-right <?php echo $pagination_validation_class; ?> validation_error_pagination" onclick="Paginate('previous', '<?php echo $keysub; ?>', '<?php echo $GroupSeqCnt; ?>');"></i>
                                                <i class="fa fa-info-circle m-r-10 m-l-10 pull-right"  onclick="loadhandsondatafinal_all('<?php echo $valprodFields['AttributeMasterId']; ?>', '<?php echo $i; ?>', '<?php echo $key; ?>', '<?php echo $keysub; ?>');" data-rel="page-tag" data-target="#exampleFillInHandson" data-toggle="modal"></i>
                                                                    <?php
                                                                }
                                                                ?>
                                                <input type="hidden" value="<?php echo $AttributeSubGroupMasterJSON[$key][$keysub]; ?>" id="attrsub<?php echo $i; ?>_<?php echo $key; ?>_<?php echo $keysub; ?>" class="removeinputclass">
                                                
                                                </div>
                                                </div>
                                                <br/><br/>
                                                                <?php
                                                            }
                                                            //pr($GrpSercntArr);

                                                            if ($GroupSeqCnt == 0) {
                                                                $GroupSeqCnt = 1;
                                                            }
                                                            ?>
                                                <input value="1" type="hidden" data="<?php echo $GroupSeqCnt; ?>" name="GroupSeq_<?php echo $keysub; ?>" class="GroupSeq_<?php echo $keysub; ?> removeinputclass">

                                                            <?php
                                                             $attr3_ar = array();
                                                            for ($grpseq = 1; $grpseq <= $GroupSeqCnt; $grpseq++) {
                                                                if ($grpseq > 1)
                                                                    $disnone = "display:none;";
                                                                else
                                                                    $disnone = "";
                                                                ?>

                                                <div style="<?php echo $disnone; ?>Padding:0px;" id="MultiSubGroup_<?php echo $keysub; ?>_<?php echo $grpseq; ?>" class="clearfix">
                                                                <?php
                                                            foreach ($valuesSub as $keyprodFields => $valprodFields) {
                                                                        if ($isDistinct !== false)
                                                                        $totalSeqCnt = 0;
                                                                    else
                                                                $totalSeqCnt = count($processinputdata[$valprodFields['AttributeMasterId']]);

                                                                        $projAvail = count($processinputdata[$valprodFields['AttributeMasterId']]);
                                                               

                                                                if ($totalSeqCnt == 0) {
                                                                    $totalSeqCnt = 1;
                                                                }
                                                                ?>

                                                    
                                                                        <?php
                                                                        for ($thisseq = 1; $thisseq <= $totalSeqCnt; $thisseq++) {
                                                                                    $tempSq = 1;
                                                                                    if ($isDistinct !== false) {
                                                                                        $tempSq = $grpseq;
                                                                                    } else
                                                                                        $tempSq = $thisseq;
                                                                                     
                                                                                    $ProdFieldsValue = $processinputdata[$valprodFields['AttributeMasterId']][$tempSq][$DependentMasterIds['ProductionField']];
                                                                                    $InpValueFieldsValue = $processinputdata[$valprodFields['AttributeMasterId']][$tempSq][$DependentMasterIds['InputValue']];
                                                                                    $DispositionFieldsValue = $processinputdata[$valprodFields['AttributeMasterId']][$tempSq][$DependentMasterIds['Disposition']];
                                                                                    $CommentsFieldsValue = $processinputdata[$valprodFields['AttributeMasterId']][$tempSq][$DependentMasterIds['Comments']];
										    $ScoreFieldsValue = $processinputdata[$valprodFields['AttributeMasterId']][$tempSq][$DependentMasterIds['Score']];
                                                                                    $dependency=$DependentMasterIds['ProductionField'];
                                                                                    $ProdFieldsName = "ProductionFields_" . $valprodFields['AttributeMasterId'] . "_" . $DependentMasterIds['ProductionField'] . "_" . $tempSq;
                                                                                    $ProdFieldsId = "ProductionFields_" . $valprodFields['AttributeMasterId'] . "_" . $DependentMasterIds['ProductionField'] . "_" . $tempSq;
                                                                                    $InpValueFieldsName = "ProductionFields_" . $valprodFields['AttributeMasterId'] . "_" . $DependentMasterIds['InputValue'] . "_" . $tempSq;
                                                                                    $DispositionFieldsName = "ProductionFields_" . $valprodFields['AttributeMasterId'] . "_" . $DependentMasterIds['Disposition'] . "_" . $tempSq;
                                                                                    $CommentsFieldsName = "ProductionFields_" . $valprodFields['AttributeMasterId'] . "_" . $DependentMasterIds['Comments'] . "_" . $tempSq;
                                                                                    $dbClassName = "UpdateFields removeinputclass";
                                                                        if ($maxSeq[$DependentMasterIds['ProductionField']] < $tempSq) {
                                                                            $dbClassName = "InsertFields";
                                                                        }  else  $dbClassName = "UpdateFields removeinputclass";
                                                                        if ($maxSeq[$DependentMasterIds['Disposition']] < $tempSq) {
                                                                            $dbClassName_Disposition = "InsertFields";
                                                                        } else $dbClassName_Disposition = "UpdateFields removeinputclass";  
                                                                          if ($maxSeq[$DependentMasterIds['Comments']] < $tempSq) {
                                                                            $dbClassName_Comments = "InsertFields";
                                                                        } else $dbClassName_Comments = "UpdateFields removeinputclass";            

                                                                            if ($thisseq > 1)
                                                                                $disnone = "display:none;";
                                                                            else
                                                                                $disnone = "";

                                                                            $inpuControlType = $valprodFields['ControlName'];
//                                                                            if ($inpuControlType == "RadioButton" || $inpuControlType == "CheckBox")
//                                                                                $inpClass = 'onchange="autoSave(' . $valprodFields['AttributeMasterId'] . ', ' . $DependentMasterIds['ProductionField'] . ', ' . $tempSq.');" class="doOnBlur ' . $dbClassName . '" ';
//                                                                            else
//                                                                                $inpClass = 'onchange="autoSave(' . $valprodFields['AttributeMasterId'] . ', ' . $DependentMasterIds['ProductionField'] . ', ' . $tempSq.');" class="wid-100per form-control doOnBlur ' . $dbClassName . '" ';
                                                                            
                                                                            $inpId = 'id="' .$ProdFieldsId. '" ';
                                                                            $inpName = 'name="' . $ProdFieldsName . '" ';
                                                                            $inpValue = 'value="' . $ProdFieldsValue . '" ';
                                                                                    $inpOnClick = 'onclick="getThisId(this); loadWebpage(' . $valprodFields['AttributeMasterId'] . ', ' . $valprodFields['ProjectAttributeMasterId'] . ', ' . $valprodFields['MainGroupId'] . ', ' . $valprodFields['SubGroupId'] . ', ' . $tempSq . ', 0);" ';
                                                                            ?>
                                                                            <?php
                                                                            
                                                                            //Mandatory coding starts
                                                                            $IsMandatory=$validate[$valprodFields['ProjectAttributeMasterId']]['IsMandatory'];
                                                                            $DisplayAttributeName=$validate[$valprodFields['ProjectAttributeMasterId']]['DisplayAttributeName'];
                                                                            if($IsMandatory==1){
                                                                                $mandateFunction = "MandatoryValue(this.id,this.value,'$DisplayAttributeName');";
                                                                            }else{
                                                                               $mandateFunction =''; 
                                                                            }
                                                                            if(empty($validate[$valprodFields['ProjectAttributeMasterId']]['MinLength'])){
                                                                               $minlength = "null";
                                                                            }else{
                                                                              $minlength = $validate[$valprodFields['ProjectAttributeMasterId']]['MinLength']; 
                                                                            }
                                                                            //Mandatory coding ends
                                                                            if($valprodFields['ControlName']=='TextBox' || $valprodFields['ControlName']=='Label') { 
                                                                             $inpOnBlur = 'onblur="checkLength(this,'.$valprodFields['AttributeMasterId'].','.$DependentMasterIds['ProductionField'].','.$tempSq.','.$minlength.');'.$mandateFunction.' '.$validate[$valprodFields['ProjectAttributeMasterId']]['FunctionName'].'(\'ProductionFields_' . $valprodFields['AttributeMasterId'].'_'.$DependentMasterIds['ProductionField'].'_'.$tempSq . '\', this.value,'.'\'' . $validate[$valprodFields['ProjectAttributeMasterId']]['AllowedCharacter'] . '\', '.'\''.$validate[$valprodFields['ProjectAttributeMasterId']]['NotAllowedCharacter'].'\', '.'\''.$validate[$valprodFields['ProjectAttributeMasterId']]['Dateformat'].'\', '.'\''.$validate[$valprodFields['ProjectAttributeMasterId']]['AllowedDecimalPoint'].'\');" maxlength="'.$validate[$valprodFields['ProjectAttributeMasterId']]['MaxLength'].'" minlength="'.$validate[$valprodFields['ProjectAttributeMasterId']]['MinLength'].'"';   
                                                                             $inpClass = 'onchange="autoSave(' . $valprodFields['AttributeMasterId'] . ', ' . $DependentMasterIds['ProductionField'] . ', ' . $tempSq.');" class="wid-100per inputsubGrp_'.$key.'_'.$keysub.' form-control doOnBlur ' . $dbClassName . '" ';
                                                                            }elseif($valprodFields['ControlName']=='DropDownList') {
                                                                             $inpOnBlur = 'onblur="'.$mandateFunction.' '.$validate[$valprodFields['ProjectAttributeMasterId']]['FunctionName'].'(\'ProductionFields_' . $valprodFields['AttributeMasterId'].'_'.$DependentMasterIds['ProductionField'].'_'.$tempSq . '\', this.value,'.'\'' . $validate[$valprodFields['ProjectAttributeMasterId']]['AllowedCharacter'] . '\', '.'\''.$validate[$valprodFields['ProjectAttributeMasterId']]['NotAllowedCharacter'].'\', '.'\''.$validate[$valprodFields['ProjectAttributeMasterId']]['Dateformat'].'\', '.'\''.$validate[$valprodFields['ProjectAttributeMasterId']]['AllowedDecimalPoint'].'\');" ';      
                                                                           //  $call = ''.$validate[$valprodFields['ProjectAttributeMasterId']]['Reload'].','.$valprodFields['AttributeMasterId'].','.$DependentMasterIds['ProductionField'].','.$tempSq.'); autoSave(' . $valprodFields['AttributeMasterId'] . ', ' . $DependentMasterIds['ProductionField'] . ', ' . $tempSq.');';
                                                                             $call = 'LoadValue('.$valprodFields['ProjectAttributeMasterId'].',this.value,'.$validate[$valprodFields['ProjectAttributeMasterId']]['Reload'].','.$valprodFields['AttributeMasterId'].','.$DependentMasterIds['ProductionField'].','.$tempSq.'); autoSave(' . $valprodFields['AttributeMasterId'] . ', ' . $DependentMasterIds['ProductionField'] . ', ' . $tempSq.');';
                                                                             $inpClass = 'onchange="' . $call . '" class="inputsubGrp_'.$key.'_'.$keysub.' wid-100per form-control doOnBlur ' . $dbClassName . '" ';
                                                                            }elseif($valprodFields['ControlName']=='MultiTextBox') {
                                                                              $COpyTeXtId = 'id=COpyTeXt_'.$valprodFields['AttributeMasterId'].'_'.$tempSq;
                                                                              $inpOnBlur = 'onblur="'.$mandateFunction.' '.$validate[$valprodFields['ProjectAttributeMasterId']]['FunctionName'].'(\'ProductionFields_' . $valprodFields['AttributeMasterId'].'_'.$DependentMasterIds['ProductionField'].'_'.$tempSq . '\', this.value,' .'\''. $validate[$valprodFields['ProjectAttributeMasterId']]['AllowedCharacter'] . '\', '.'\''.$validate[$valprodFields['ProjectAttributeMasterId']]['NotAllowedCharacter'].'\', '.'\''.$validate[$valprodFields['ProjectAttributeMasterId']]['Dateformat'].'\', '.'\''.$validate[$valprodFields['ProjectAttributeMasterId']]['AllowedDecimalPoint'].'\');" ';       
                                                                              $inpClass = 'onclick="autoSave(' . $valprodFields['AttributeMasterId'] . ', ' . $DependentMasterIds['ProductionField'] . ', ' . $tempSq.');" class="wid-100per inputsubGrp_'.$key.'_'.$keysub.' testmulti doOnBlur ' . $dbClassName . '"';
                                                                            }
                                                                            elseif($valprodFields['ControlName']=='RadioButton' || $valprodFields['ControlName']=='CheckBox') {
                                                                               $inpClass = 'onchange="autoSave(' . $valprodFields['AttributeMasterId'] . ', ' . $DependentMasterIds['ProductionField'] . ', ' . $tempSq.');" class="inputsubGrp_'.$key.'_'.$keysub.' doOnBlur ' . $dbClassName . '" '; 
                                                                            }elseif($valprodFields['ControlName']=='Auto') {
                                                                                $inpClass = 'onchange="autoSave(' . $valprodFields['AttributeMasterId'] . ', ' . $DependentMasterIds['ProductionField'] . ', ' . $tempSq.');" class="wid-100per inputsubGrp_'.$key.'_'.$keysub.' form-control doOnBlur ' . $dbClassName . '" ';
                                                                            }else{
                                                                                $inpClass = 'onchange="autoSave(' . $valprodFields['AttributeMasterId'] . ', ' . $DependentMasterIds['ProductionField'] . ', ' . $tempSq.');" class="wid-100per inputsubGrp_'.$key.'_'.$keysub.' form-control doOnBlur ' . $dbClassName . '" ';
                                                                            }
                                                                            ?>
                                                    
															<div class="commonClass commonclass_<?php echo $valprodFields['MainGroupId']?>" id="groupAttr_<?php echo $valprodFields['AttributeMasterId'].'_'.$grpseq?>">
                                                            <div id="MultiField_<?php echo $valprodFields['AttributeMasterId']; ?>_<?php echo $thisseq; ?>" class="clearfix MultiField_<?php echo $valprodFields['AttributeMasterId']; ?> CampaignWiseFieldsDiv_<?php echo $key; ?> row form-responsive" style="<?php echo $disnone; ?>" >
                                                                
                                                                <div class="col-md-3 form-title">
                                                                <div class="form-group" style=""><p><?php echo $valprodFields['DisplayAttributeName'] ?></p>
                                                                    <input type="hidden" value="<?php echo $valprodFields['DisplayAttributeName'] ?>" id="attrdisp<?php echo $valprodFields['AttributeMasterId']; ?>_<?php echo $i; ?>_<?php echo $key; ?>_<?php echo $keysub; ?>" class="removeinputclass">
                                                                </div>	
                                                                </div>
                                                                <div class="col-md-4 form-text">
                                                                <div class="form-group">
                                                                                    <?php
                                                                                    $readonly=array();
                                                                                    foreach ($ReadOnlyFields as $ReadOnlyVal){
                                                                                        if($ReadOnlyVal['DisplayAttributeName'] == $valprodFields['DisplayAttributeName']){
                                                                                            $readonly[] = 'readonly="readonly"';
                                                                                        }
                                                                                    }
                                                                                    $readonly = $readonly[0];
                                                                                    if ($inpuControlType == "TextBox") {
                                                                                        echo '<input type="text" ' . $inpClass . $inpId . $inpName . $inpValue . $inpOnClick . $inpOnBlur . $readonly . '>';
                                                                                    } else if ($inpuControlType == "CheckBox") {
                                                                                        echo '<input type="checkbox" ' . $inpClass . $inpId . $inpName . $inpValue . $inpOnClick . $inpOnBlur .'>';
										} else if ($inpuControlType == "MultiTextBox") {
                                                                                    
                                                                                        echo '<textarea readonly="readonly" class="wid-100per form-control" ' . $COpyTeXtId . '>'.$ProdFieldsValue.'</textarea>';
                                                                                        //    if(!empty($valprodFields['Options'])){
                                                                                        //        $inpName = 'name="' . $ProdFieldsName . '[]" ';
                                                                                        //        $ProdFieldsValueArr=explode(',',$ProdFieldsValue);                                   
                                                                                        //            echo '<select ' . $inpClass . $inpId . $inpName . $inpOnClick . $inpOnBlur . 'multiple="true">';
                                                                                        //        foreach ($valprodFields['Options'] as $ke => $va) {
                                                                                        //        $sele = "";
                                                                                        //        if (in_array($va,$ProdFieldsValueArr))
                                                                                        //            $sele = "selected";
                                                                                        //            echo '<option value="' . $va . '" ' . $sele . '>' . $va . '</option>';
                                                                                        //        }
                                                                                        //    } else {
                                                                                        //        echo '<textarea ' . $inpClass . $inpId . $inpName . $inpOnClick . $inpOnBlur .'>'.$ProdFieldsValue.'</textarea>';
                                                                                        //    }
                                                                                        //       echo '</select>';

                                                                                        if(!empty($valprodFields['Options'])){
                                                                                            $inpName = 'name="' . $ProdFieldsName . '[]" ';
                                                                                            $ProdFieldsValueArr=explode(',',$ProdFieldsValue);
                                                                                            echo '<select ' . $inpClass . $inpId . $inpName . $inpOnClick . $inpOnBlur . ' multiple="true">';
                                                                                            foreach ($valprodFields['Options'] as $ke => $va) {
                                                                                            $sele = "";
                                                                                            if (in_array($va,$ProdFieldsValueArr))
                                                                                                $sele = "selected";
                                                                                                echo '<option value="' . $va . '" ' . $sele . '>' . $va . '</option>';
                                                                                            }
                                                                                             echo '</select>';
                                                                                        } else {
                                                                                            echo '<textarea ' . $inpClass . $inpId . $inpName . $inpOnClick . $inpOnBlur .'>'.$ProdFieldsValue.'</textarea>';
                                                                                        }


                                                                                    } else if ($inpuControlType == "RadioButton") {
                                                                                        
                                                                                        if (strtolower($ProdFieldsValue) == "yes")
                                                                                            $yesSel = ' checked="checked"';
                                                                                        if (strtolower($ProdFieldsValue) == "no")
                                                                                            $noSel = ' checked="checked"" ';
                                                                                       echo '<input value="Yes" style="position:static" type="radio" ' . $inpClass . $inpId . $inpName . $inpOnClick . $inpOnBlur . $yesSel . '> Yes';  
										       echo '<input style="position:static" value="No" type="radio" ' . $inpClass . $inpId . $inpName . $inpOnClick . $inpOnBlur . $noSel . '> No';
                                                                                    }
                                                                                    else if ($inpuControlType == "DropDownList") {
                                                                                        echo '<select ' . $inpClass . $inpId . $inpName . $inpOnClick . $inpOnBlur .'><option value="">--Select--</option>';
                                                                                        if(!empty($valprodFields['Options'])){
                                                                                        foreach ($valprodFields['Options'] as $ke => $va) {
                                                                                            $sele = "";
                                                                                            if ($va == $ProdFieldsValue)
                                                                                                $sele = "selected";
                                                                                            echo '<option value="' . $va . '" ' . $sele . '>' . $va . '</option>';
                                                                                        }
                                                                                        }
                                                                                        else{
                                                                                             $sele = "selected";
                                                                                           echo '<option ' . $inpValue . ' ' . $sele . '>' . $ProdFieldsValue . '</option>'; 
                                                                                        }
                                                                                        echo '</select>';
                                                                                    }
                                                                                    ?>
                                                                    <span class="lighttext" value="<?php echo $InpValueFieldsValue; ?>" id="beforeText_<?php echo $key; ?>_<?php echo $keysub; ?>_<?php echo $valprodFields['AttributeMasterId']; ?>_<?php echo $tempSq; ?>" data-toggle="tooltip" title="<?php echo $InpValueFieldsValue; ?>"><?php echo $InpValueFieldsValue; ?></span><?php //echo $ScoreFieldsValue; ?>
                                                                </div>
                                                                </div>
                                                                <div class="col-md-2 form-text">
                                                                <div class="form-group comments">
                                                                    <textarea rows="1" cols="50" class="form-control <?php echo $dbClassName_Disposition; ?>" id="" name="<?php echo $CommentsFieldsName; ?>" placeholder="Comments" onclick="loadWebpage(<?php echo $valprodFields['AttributeMasterId']; ?>, <?php echo $valprodFields['ProjectAttributeMasterId']; ?>, <?php echo $valprodFields['MainGroupId']; ?>, <?php echo $valprodFields['SubGroupId']; ?>,<?php echo $tempSq; ?>, 0);"><?php echo $CommentsFieldsValue; ?></textarea>
                                                                </div>
                                                                </div>
                                                                <div class="col-md-3 form-status">
                                                                <div class="form-group status">
                                                                    <select id="<?php echo $key.'_'.$keysub.'_'.$valprodFields["AttributeMasterId"].'_'.$tempSq;?>" name="<?php echo $DispositionFieldsName; ?>"  class="<?php echo $dbClassName_Disposition; ?> form-control CampaignWiseSelDone_<?php echo $key; ?> dispositionSelect subGrpDisp_<?php echo $key; ?>_<?php echo $keysub; ?>">
                                                                        <option value="">--</option>
                                                                        <option value="A" <?php
                                                                       // echo "DispositionFieldsValue_".$DispositionFieldsValue;
                                                                    if ($DispositionFieldsValue == "A") {
                                                                                        echo 'selected';
                                                                    }
                                                                        ?>>A</option>
                                                                        <option value="D" <?php
                                                                                                if ($DispositionFieldsValue == "D") {
                                                                                        echo 'selected';
                                                                                                }
                                                                                                ?>>D</option>
                                                                        <option value="M" <?php
                                                                                                if ($DispositionFieldsValue == "M") {
                                                                                        echo 'selected';
                                                                                                }
                                                                                                ?>>M</option>
                                                                        <option value="V" <?php
                                                                                if ($DispositionFieldsValue == "V") {
                                                                echo 'selected';
                                                                                }
                                                                                                ?>>V</option>
                                                                    </select>
                                                                    <div>
                                                                        <?php
                                                                $array1 = $valprodFields['AttributeMasterId'];
                                                                $array2 = $HelpContantDetails;
                                                                if (in_array($array1, $array2)) {
                                                                    ?>
                                                                         <i title="Help" class="fa fa-question-circle question m-r-10 m-l-10" data-target="#helpmodal" data-toggle="modal" onclick='loadHelpContent(<?php echo $valprodFields['AttributeMasterId']; ?>, "<?php echo $valprodFields['DisplayAttributeName']; ?>");'></i>
                                                                
                                                                <?php } ?>
               
                                    <?php if ($totalSeqCnt > 1) {
                                                                            ?>
                                                                 
                                                                <i class="fa fa-info-circle m-l-10" ata-target="#example-modal" onclick="loadhandsondatafinal('<?php echo $valprodFields['AttributeMasterId']; ?>', '<?php echo $i; ?>', '<?php echo $key; ?>', '<?php echo $keysub; ?>','<?php echo $valprodFields['DisplayAttributeName']; ?>');" data-rel="page-tag" data-target="#exampleFillInHandson" data-toggle="modal"></i>
                                                                <i class="fa fa-angle-double-left " onclick="loadMultiField('previous', '<?php echo $valprodFields['AttributeMasterId']; ?>', '<?php echo $totalSeqCnt; ?>');"></i>
                                                                <i class="fa fa-angle-double-right m-r-5" onclick="loadMultiField('next', '<?php echo $valprodFields['AttributeMasterId']; ?>', '<?php echo $totalSeqCnt; ?>');"></i> 
                                                            
                                                                <?php
                                                            } ?>
                                                                     <?php if ($isDistinct === false) {
                                                                            if($valprodFields['IsDistinct']==0) {
                                                                                ?>
                                                                <i id="add-field" class="fa fa-plus-circle add-field m-r-10 addAttribute" data="<?php echo $valprodFields['AttributeMasterId']; ?>" data-ProjAttrId="<?php echo $valprodFields['ProjectAttributeMasterId']; ?>" date-subgrpId="<?php echo $keysub;?>" data-groupId="<?php echo $key; ?>" data-groupName="<?php echo $valprodFields['DisplayAttributeName']; ?>"></i>
                                                                                <?php 
                                                                            }
                                                                            } ?>
                                                                </div>
                                                                </div>
                                                                </div>

                                                                
                                                            <!--<i class="fa fa-minus-circle remove-field"></i>-->
                                                            </div>
                                                </div>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                    <span style="padding:0px;" class="add_<?php echo $valprodFields['AttributeMasterId']; ?>"></span>

                                                            <input value="1" type="hidden" data="<?php echo $thisseq - 1; ?>" name="ShowingSeqDiv_<?php echo $valprodFields['AttributeMasterId']; ?>" class="ShowingSeqDiv_<?php echo $valprodFields['AttributeMasterId']; ?> removeinputclass">

                                                                        <?php
                                                                        
                                                            ?>
                                                        

                                                   
                                                                <?php // code for validation
                                                                 $attr3 = $valprodFields;
                                                                  unset($attr3['Options']);
                                                                  $attr3_ar[] = $attr3;
                                                                  
                                                                }
                                                                ?>

                                                </div>
                                                            <?php
                                                            } // group seq loop
            ?>
                                                <span style="" class="addGrp_<?php echo $keysub; ?>"></span>
                                            </div>
            <?php 
             // code for validation
            $attr_sub[$keysub] = $attr3_ar;
               }
            $attr1['sub'] = $attr_sub;
        ?>
                                        </div>
                                    </div>
                                        <!--                                    ----------------------------first campaign end--------------------------------------->
                                                <?php
                                                $i++;
                                                $attr_array[] = $attr1;
                                            }
                                            ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Splitter Ends -->
            </div>  
        </div>
        
        <!-- Project List Ends -->	
        <div class="view-sourcelink p-l-0 p-r-0">
            <!-- <a href="#" class="current button offcanvas__trigger--open m-l-10" data-rel="page-tag">View Source Link</a> -->
            <div class="col-lg-6" align="left">
<!--                <button type="button" href="#" class="btn btn-default offcanvas__trigger--open" onclick="multipleUrl();" id="multiplelinkbutton" data-rel="page-tag">Multiple Source Links</button>-->
                <button type="button" class="btn btn-default offcanvas__trigger--close" onclick="loadReferenceUrl();" data-rel="page-tag" data-target="#exampleFillIn" data-toggle="modal">View Source</button>
                <!--                <button class="btn btn-default" name='pdfPopUP' id='pdfPopUp' onclick="PdfPopup();" type="button">Undock</button>-->
            </div>
             <?php if(!empty($QueryDetails['Query'])){
                        $style_endisble = "display:block;";
                        //$style_endisble = "display:none;";
                        }else{
                            $style_endisble = "display:none;";
                        }
               ?>
            
            <div class="col-lg-6 pull-right m-t-5 m-b-5">		
                <button type="submit" name='Submit' value="saveandexit" class="btn btn-primary pull-right m-r-5 formsubmit_validation_endisable" style="<?php echo $style_endisble;?>" onclick="return formSubmit();"> Submit & Exit </button>
                <button type="submit" name='Submit' value="saveandcontinue" class="btn btn-primary pull-right formsubmit_validation_endisable" onclick="return formSubmit();" style="margin-right: 5px;<?php echo $style_endisble;?>"> Submit & Continue </button>
				<!--<button type="submit" name='Submit' value="saveandcontinue" class="btn btn-primary pull-right " onclick="return skipformSubmit();" style="margin-right: 5px;"> Skip & Continue </button> -->
                <button type="button" name='Save' value="Save" id="save_btn" class="btn btn-primary pull-right m-r-5" onclick="AjaxSave('');">Save</button>
                 <button type="button" name='Validation' value="validation" class="btn btn-primary pull-right m-r-5" onclick="AjaxValidation();">Validation</button>
                <button type="button" class="btn btn-default pull-right m-r-5" data-target="#querymodal" data-toggle="modal">Query</button>
            </div>
        </div>
    </form>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-right-0 padding-left-0">
        <!--        <div class="modal fade modal-fill-in">-->
<!--        <div id="page-tag" class="offcanvas multisourcediv">
            <div class="panel m-30">
                <div class="panel-body panel-height multiple-height">
                     <a class="panel-action fa fa-cog pull-right" data-toggle="panel-fullscreen" aria-hidden="true" style="color:red;"></a> 
                    <div class="col-xs-12 col-xl-12" id="addnewurl"> 
                        <div class="col-xs-12 col-xl-4">
                            <div class="srcblock box">
                           <i class="fa fa-times-circle save"></i>
                                <i class="fa fa-save save"></i>
                                <input autocomplete="off" type="text" class="form-control" id="addurl" placeholder="Enter Url..">

                            </div> </div> </div>
                    <div class="col-xs-12 col-xl-12">
                        <div id="LoadAttrValue">
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="button" class="btn btn-primary pull-right m-r-5" data-rel="page-tag" onclick="addReferenceUrl();">Add</button>		
                    <button type="button" class="btn btn-default pull-right m-r-5 offcanvas__trigger--close multisorcedivclose" data-rel="page-tag">Cancel</button>

                </div>
            </div>
        </div>-->
        <!--        </div>-->
        <!-- Right side flip canvas for Page Taggs ends -->	
        <!-- Modal -->

        <div class="modal fade modal-fill-in" id="exampleFillIn" aria-hidden="false" aria-labelledby="exampleFillIn" role="dialog" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="exampleFillInModalTitle">All Source Links</h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-xs-12 col-xl-12 p-l-10" id="multiplelinkbutton">
   <span><h4 style="
    display: inline-block;
">Attribute source link</h4></span>
<span style="
    float: right;
"><button type="button" class="btn btn-primary m-r-5" data-rel="page-tag" onclick="addReferenceUrl();">Add</button></span>
<div class="panel">
                <div class="panel-body panel-height multiple-height p-0  p-t-30">
                    <!-- <a class="panel-action fa fa-cog pull-right" data-toggle="panel-fullscreen" aria-hidden="true" style="color:red;"></a> -->
                    <div class="col-xs-12 col-xl-12" id="addnewurl" style="display: none;"> 
                        <div class="col-xs-12 col-xl-4">
                            <div class="srcblock box">
<!--                           <i class="fa fa-times-circle save"></i>-->
                                <i class="fa fa-save save"></i>
                                <input autocomplete="off" type="text" class="form-control" id="addurl" placeholder="Enter Url..">

                            </div> </div> </div>
                    <div class="col-xs-12 col-xl-12">
                        <div id="LoadAttrValue">
                    </div>
                        </div>
                </div>
                <!-- <div class="panel-footer">
                    <button type="button" class="btn btn-primary pull-right m-r-5" data-rel="page-tag" onclick="addReferenceUrl();">Add</button>		
<!--                    <button type="button" class="btn btn-default pull-right m-r-5 offcanvas__trigger--close multisorcedivclose" data-rel="page-tag">Cancel</button>-->

<!--</div> -->
            </div>
    </div>
                        <div class="col-xs-12 col-xl-12 p-b-20 p-l-10 ">
                            <h4>Other links</h4>
                        <div class="col-xs-12 col-xl-12 panel p-t-30 p-b-20">
                            <div id="LoadGroupAttrValue"> 
                            </div>
                        </div>
                        <div class="col-xs-12 col-xl-12 m-t-30 hide">
                            <button type="button" class="btn btn-default pull-right m-r-5" data-dismiss="modal">Cancel</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->



        <!-- Help Modal Starts-->
        <div class="modal fade" id="helpmodal" aria-hidden="true" aria-labelledby="helpmodal" role="dialog" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
    <?php //foreach (){   ?>
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                <h4 class="modal-title" id="HelpModelAttribute"></h4>
                                            </div>
                    <div class="modal-body">
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button> -->
                        <div class="form-group">
                            <span id='HelpModelContent'>

                            </span>
                        </div>
                    </div>
    <?php // }   ?>
                </div>
            </div>
        </div>
        <!-- Help Modal End-->

        <!-- Handson Modal -->

        <div class="modal fade modal-fill-in" id="exampleFillInHandson" aria-hidden="false" aria-labelledby="exampleFillInHandson" role="dialog" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="exampleFillInHandsonModalTitle"></h4>
                    </div>
                    <div class="modal-body">
                        <div id="example" class="container-fluid" style="margin-bottom:-10px;">
                            <div id="vertical">
                                <div id="top-pane">
                                    <div id="horizontal" style="height: 100%; width: 100%;">
                                        <div id="right-pane">
                                            <div id="example1" class="hot handsontable htColumnHeaders"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Handson Modal -->

        <!-- Modal -->
        <div class="modal fade" id="querymodal" aria-hidden="true" aria-labelledby="querymodal" role="dialog" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
    <?php
    if ($QueryDetails['StatusID'] == 1) {
        ?>

                    <div id='successMessage' align='center' style='display:none;color:green'><b>Query Successfully Posted!</b></div>
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="exampleModalTitle">Query</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-inline" action="/action_page.php">
                            <div class="form-group">
                                <label for="Query" class="query">Query</label>
                                <textarea name="query" id="query" rows="4" cols="30" placeholder="Enter Your Query"><?php echo $QueryDetails['Query']; ?></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="ProductionEntity" id="ProductionEntity" value="<?php echo $productionjob['ProductionEntity']; ?>">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <?php echo $this->Form->button('Submit', array('id' => 'Query', 'type' => 'button', 'name' => 'Query', 'value' => 'Query', 'class' => 'btn btn-primary', 'onclick' => "return valicateQuery();")) . ' '; ?>
                        <!--                            <button type="button" class="btn btn-primary">Submit</button>-->
                    </div>

        <?php
    } else if ($QueryDetails['StatusID'] == 3) {
        ?>

                    <div id='successMessage' align='center' style='display:none;color:green'><b>Query Successfully Posted!</b></div>
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="exampleModalTitle">Query</h4>
                    </div>
                    <div class="modal-body">
                        <table style="width:100%">
                            <tr>
                                <td >User Query</td>
                                <td>TL Comments</td></tr>
                            <tr>
                            <tr>
                                <td><textarea name="query" id="query" rows="4" cols="30"><?php echo $QueryDetails['Query']; ?></textarea></td>
                                <td><textarea name="query" id="query" rows="4" cols="30"><?php echo $QueryDetails['TLComments']; ?></textarea></td></tr>
                        </table>
                    </div>

        <?php
    } else {
        ?>

                    <div id='successMessage' align='center' style='display:none;color:green'><b>Query Successfully Posted!</b></div>
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="exampleModalTitle">Query</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-inline" action="/action_page.php">
                            <div class="form-group">
                                <label for="Query" class="query">Query</label>
                                <textarea name="query" id="query" rows="4" cols="30" placeholder="Enter Your Query"><?php echo $QueryDetails['Query']; ?></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="ProductionEntity" id="ProductionEntity" value="<?php echo $productionjob['ProductionEntity']; ?>">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <?php echo $this->Form->button('Submit', array('id' => 'Query', 'type' => 'button', 'name' => 'Query', 'value' => 'Query', 'class' => 'btn btn-primary', 'onclick' => "return valicateQuery();")) . ' '; ?>
                        <!--                            <button type="button" class="btn btn-primary">Submit</button>-->
                    </div>

        <?php
      
    }
     
    
function getattrsubgroupmasterid($json,$mastid,$subid){
    return $json[$mastid][$subid];
}

if(!empty($attr_array)){
    $list_data[$productionjob['ProjectId']] = array();
    $list_data_main = array();
    foreach($attr_array as $key=>$val){
        // header1 - name 
        foreach($val['sub'] as $subkey=>$subvalue){
            // header2 sub-key get name
            $subtitle = getattrsubgroupmasterid($AttributeSubGroupMasterJSON,$val['id'],$subkey);
            foreach($subvalue as $sskey=>$ssvalue){
                $ssattrname = $ssvalue['AttributeName']; // get header name 3
                $list_data_main[$val['name']][$subtitle][$ssattrname][1]=null;
                $list_data_main[$val['name']][$subtitle][$ssattrname]['key']="ProductionFields_" . $ssvalue['AttributeMasterId'] . "_" . $DependentMasterIds['ProductionField'];
//                $list_data_main[$val['name']][$subtitle][$ssattrname]['cunt']=count($processinputdata[$ssvalue['AttributeMasterId']]);
            

            }
        }
    }
}
//echo "<pre>s";print_r($list_data_main);exit;
    ?>
                </div>
            </div>
        </div>
        <!-- End Modal -->		
    </div>	
<?php //exit; ?>
    <script type="text/javascript">
          var jsnlist = JSON.parse('<?php echo json_encode($list_data_main); ?>' );
         var project_scope_id = "<?php echo $staticFields[0]; ?>";
    
       function AjaxValidation(){
$(".formsubmit_validation_endisable").show();
	   return true; 
            $(".validationloader").show();
            $(".validation_error").hide();
            $(".validation_error_pagination").css("color", "#4397e6");
            $(".panel-group").css("opacity",0.5);
         
            setTimeout(function(){
                AjaxValidationstart(); 
            }, 500);
            
    }
    
    function AjaxValidationstart(){
       
         var txt = "";
         var cunt = 1;
         var itemkey ="";
         var listdata = jsnlist;
         var listerror = "";
         var strArray ="";
         var error_count ="";
       
    $.each( jsnlist, function( key, val ) {
        $.each( val, function( skey, sval ) {
            $.each( sval, function( sskey, ssval ) {
                itemkey = jsnlist[key][skey][sskey].key;
                cunt = $(":input[id^="+itemkey+"]").length;
                for (i = 1; i <= cunt; i++) {
                    txt = $("#"+jsnlist[key][skey][sskey].key+'_'+i).val();
                    if(txt){
                        listdata[key][skey][sskey][i] = txt;
                    }else{
                        listdata[key][skey][sskey][i] = null;
                    }
                }
            });
            });
        });
          
         $.ajax({
                    type: "POST",
                    url: "<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'ajaxgeapivalidation')); ?>",
                    data: ({listdata: listdata,project_scope_id:project_scope_id}),
                    dataType: 'text',
                    async: true,
                    success: function (result) {
                       
                        resultarray = JSON.parse(result);
                        listerror = resultarray['Validation Output'];
                        error_count = resultarray['Errors Count'];
       
                       if(error_count > 0){
                             $.each( listerror, function( key, val ) {
                            $.each( val, function( skey, sval ) {
                                $.each( sval, function( sskey, ssval ) {
                                    strArray = ssval.ext.split(",");
                                    for (i = 0; i < strArray.length; i++) {
                                          if(strArray[i] > 1){
                                              $("."+ssval.pagination_key).css("color", "red");
                                          }
                                           //  console.log(ssval[strArray[i]]["error_txt"]);
                                          $("#"+ssval.key+'_'+strArray[i]+"_error").html(ssval[strArray[i]]["error_txt"]);
                                          $("#"+ssval.key+'_'+strArray[i]+"_error").show();
                                    }
                                });

                                });
                        });
                       }else{
                            $(".formsubmit_validation_endisable").show(); // code added 
                       }
                          $(".panel-group").css("opacity","");
                          $(".validationloader").css({"display": "none"});
                }
            });
             
         }
         
        function checkAll(grp,subgrp){
               var select_all_Disp = document.getElementById("subgrp_"+grp+"_"+subgrp).value; 
     //   var Disp_Url = document.getElementsByClassName("subGrpDisp_"+grp+"_"+subgrp); 
        
        $(".subGrpDisp_"+grp+"_"+subgrp).val(select_all_Disp);
        
        if(select_all_Disp === 'D'){
          $(".inputsubGrp_"+grp+"_"+subgrp).val('');  
        }
        
         if(select_all_Disp === 'V'){
         var subGrpArr='<?php echo str_replace("'", "\\'", json_encode($AttributesListGroupWise))?>';
    var subGrpAtt = JSON.parse(subGrpArr);     

    var subGrpAttArr = subGrpAtt[grp][subgrp];   
     var maxSeqCntsub = $('.GroupSeq_' + subgrp).attr("data");
        var inpId = <?php echo $DependentMasterIds['ProductionField']; ?>;
   for (i = 1; i <= maxSeqCntsub; i++) {
             $.each(subGrpAttArr, function (key, val) {
                 var data = $("#beforeText_"+grp+"_"+subgrp+"_"+val['AttributeMasterId']+"_"+i).text(); 
                 $("#ProductionFields_"+val['AttributeMasterId']+"_"+inpId+"_"+i).val(data); 
                 
                  var maxSeqCnt = $('.ShowingSeqDiv_' + val['AttributeMasterId']).attr("data");
                  if(maxSeqCnt > 1){
                       for (j = 1; j <= maxSeqCnt; j++) {
                 var data = $("#beforeText_"+grp+"_"+subgrp+"_"+val['AttributeMasterId']+"_"+j).text(); 
                 $("#ProductionFields_"+val['AttributeMasterId']+"_"+inpId+"_"+j).val(data); 
             }
        }
             });
}      
}
        }
        
        function checkLength(el,id,depd,seq,minval) {
if(el.value.length > 0){
   if(el.value.length < minval){
        alert("make sure the input is " +minval+  " characters long");
        setTimeout(function() { 
            document.getElementById('ProductionFields_'+id+'_'+depd+'_'+seq).focus(); 
        }, 10);
        return false;
    }
   }
}
        
$(document).keydown(function(e) {
    		if(e.which == 65) { 
                    
			
		} 
	});
        $(document).ready(function () {
            baseinfodivcount = 1;
            $("#MySplitter").splitter();
            $("#MySplitter").trigger("resize", [320]);
            $('#myCarousel').carousel({
                interval: 40000
            });
            
           
            
        });

        // Script for bottom side flip canvas starts
        $(document).ready(function () {
            $('#document-tag, #page-tag').iptOffCanvas({
                baseClass: 'offcanvas',
                type: 'bottom' // top, right, bottom, left.
            });
        });
        // Script for bottom side flip canvas ends

        //-------------------------ondblclick html start-----------------//

            function getThisId(thiss) {
				//alert(name);
                AttrcopyId = $(thiss).focus();
            }
            
            jQuery(function($) {
                $('object').bind('load', function() {
                   var childFrame = $(this).contents().find('body');
                    childFrame.on('dblclick', function() {
                        var iframe= document.getElementById('frame1');
                        var idoc= iframe.contentDocument || iframe.contentWindow.document;
                        var seltext = idoc.getSelection();
                        $(AttrcopyId).val(seltext);
                   });
                   
                   childFrame.bind('mouseup', function(){
                        var iframe= document.getElementById('frame1');
                        var idoc= iframe.contentDocument || iframe.contentWindow.document;
                        var seltext = idoc.getSelection();
                        if (seltext.rangeCount && seltext.getRangeAt) {
                            range = seltext.getRangeAt(0);
                        }
                        idoc.designMode = "on";     // Set design mode to on
                        if (range) {
                            seltext.removeAllRanges();
                            seltext.addRange(range);
                        }
                        //alert(AttrcopyId);
                        if(seltext!="" && typeof AttrcopyId != 'undefined')
                            $(AttrcopyId).val(seltext);
                            idoc.execCommand("hiliteColor", false, "yellow" || 'transparent');
                           idoc.designMode = "off"; 
                          //  idoc.designMode = "on";  
                            
                           // Set design mode to off
                      //  $('#frame1 span:contains(' + seltext + ')').addClass('highlight');
                                         
                        
                    });
                       
                    
                    
                });
            });
            
//            (function($) {
//                $(function() {
//                    $('.testmulti').fSelect();
//                });
//            })(jQuery);

            //---------------Local Storage------------------
            $(document).ready(function (e) {
                
                
                for (var key in localStorage){
                    if(key=='attrgrp') {
                       
                      arrtArr=JSON.parse(localStorage.getItem('attrgrp'));
                      
                      $.each(arrtArr, function(key, value) {
                         addSubgrpAttribute(value.subgrpId,value.groupId)
                      });
                       
                    }
                    if(key=='attradd') {
                       
                      arrtArr=JSON.parse(localStorage.getItem('attradd'));
                      
                      $.each(arrtArr, function(key, value) {
                         addAttribute(value.data,value.ProjAttributeId,value.groupId,value.subgrpId,value.groupName)
                      });
                       
                    }
                   
                    //Load_verifiedAttrCnt($this);
                }
                for (var key in localStorage){
                    
                    if(key!=='attradd') {
                        
                        $('input[name="'+key+'"]').val(localStorage.getItem(key));
                        $('textarea[name="'+key+'"]').text(localStorage.getItem(key));
                       // $('select[name="'+key+'"] > option').eq(localStorage.getItem(key)).attr('selected','selected')
                       $this=$('input[name="'+key+'"]');
                       $('select[name="'+key+'"] option').filter(function() { 
                           $this=$('select[name="'+key+'"]');
                        return ($(this).text() == localStorage.getItem(key)); //To select Blue
                        }).prop('selected', true); 
                        
                
                    }
                  //  Load_verifiedAttrCnt($this);
                }
                Load_totalAttInThisGrpCnt();
                //localStorage.clear();
                $(".UpdateFields").blur(function(e){
                    AttValue = $(this).val();
                    Attname=$(this).attr("name");
                  
                    localStorage.setItem(Attname, AttValue);
                    
                    
                    
                 });
                 
                 $(".InsertFields").blur(function(e){
                    AttValue = $(this).val();
                    Attname=$(this).attr("name");
                  
                    localStorage.setItem(Attname, AttValue);
                    
                    
                    
                 });
                
                
           });
            function addslashes(str) {
            str=str.replace(/'/g,"\\'");
            str=str.replace(/"/g,'\\"');
            return str;
            }
         
            function  addAttribute (atributeId,ProjAttributeId,groupId,subgrpId,groupName) {
            //var atributeId = $(this).attr("data");
            //var ProjAttributeId = $(this).attr("data-ProjAttrId");
            //var groupId = $(this).attr("data-groupId");
            //var subgrpId = $(this).attr("date-subgrpId");
            // var groupName = $(this).attr("data-groupName");
         
            var maxSeqCnt = $('.ShowingSeqDiv_' + atributeId).attr("data");
            var nxtSeq = parseInt(maxSeqCnt) + 1;
            var subGrpArr='<?php echo str_replace("'", "\\'", json_encode($AttributesListGroupWise))?>';
            var subGrpAtt = JSON.parse(subGrpArr);
            //var subGrpArrValidate='<?php //echo htmlspecialchars(str_replace("'", "\\'", json_encode($validate)))?>';
            //var subGrpArrValidate='<?php //echo str_replace("\\", "\\",(json_encode($validate)))?>';
            //var subGrpArrValidate='<?php //echo stripslashes(str_replace("\\\\", "\\",(json_encode($validate))))?>';
            var subGrpArrValidate='<?php echo stripslashes(json_encode($validate))?>';
            var subGrpAttValidate = JSON.parse(subGrpArrValidate);
            var elementValidate = subGrpAttValidate[ProjAttributeId];
            
            var subGrpAttArr = subGrpAtt[groupId][subgrpId];
           element=[];
             $.each(subGrpAttArr, function (key, val) {
                 if(val['AttributeMasterId']==atributeId){
                     element=val;
                 }
             });
             var inpId = 'ProductionFields_' + atributeId + '_<?php echo $DependentMasterIds['ProductionField']; ?>_' + nxtSeq;
            var inpName = 'ProductionFields_' + atributeId + '_<?php echo $DependentMasterIds['ProductionField']; ?>_' + nxtSeq;
            var commendName = 'ProductionFields_' + atributeId + '_<?php echo $DependentMasterIds['Comments']; ?>_' + nxtSeq;
            var selName = 'ProductionFields_' + atributeId + '_<?php echo $DependentMasterIds['Disposition']; ?>_' + nxtSeq;
            var prodDep='<?php echo $DependentMasterIds['ProductionField']; ?>';
            var cmdDep='<?php echo $DependentMasterIds['Comments']; ?>';
            var disDep='<?php echo $DependentMasterIds['Disposition']; ?>';
             maxSeq='<?php echo json_encode($maxSeq);?>';
            maxSeqArr=JSON.parse(maxSeq);
            if(nxtSeq<=maxSeqArr[prodDep])
                var dbClass='UpdateFields';
            else
                var dbClass='InsertFields';
            if(nxtSeq<=maxSeqArr[cmdDep]) 
                var dbClass_cmd='UpdateFields';
            else
                var dbClass_cmd='InsertFields';
            
            if(nxtSeq<=maxSeqArr[disDep]) 
                var dbClass_dis='UpdateFields';
            else
                var dbClass_dis='InsertFields';
            
            //alert(nxtSeq);
            var toappendData = '<div id="MultiField_' + atributeId + '_' + nxtSeq + '" style="border-bottom: 1px dotted rgb(196, 196, 196) !important" class="row form-responsive MultiField_' + atributeId + ' CampaignWiseFieldsDiv_' + groupId + '">' +
                    '<div class="col-md-3 form-title"><div class="form-group" style=""><p>' + groupName + '</p></div></div>' +
                    '<div class="col-md-4 form-text"><div class="form-group">' ;
					
		var pam = element['ProjectAttributeMasterId'];
                 var reload = 'LoadValue('+pam+',this.value,'+elementValidate['Reload']+','+ atributeId +','+'<?php echo $DependentMasterIds['ProductionField']; ?>'+','+ nxtSeq +');';
                                      //  var reload = elementValidate['Reload'] +','+ atributeId +','+'<?php echo $DependentMasterIds['ProductionField']; ?>'+','+ nxtSeq +');';
                                        var IsMandatory=elementValidate['IsMandatory'];
                                        var DisplayAttributeName=elementValidate['DisplayAttributeName'];
                                        var mandateFunction ='';
                                         if(IsMandatory==1){
                                         var mandateFunction = 'MandatoryValue(this.id,this.value,'+'\''+DisplayAttributeName+'\');';
                                         }
                                         else{
                                          var mandateFunction =''; 
                                         }
                             var inpOnBlur ='';        
                             elementValidate['AllowedCharacter'] = addslashes(elementValidate['AllowedCharacter']);
                             elementValidate['NotAllowedCharacter'] = addslashes(elementValidate['NotAllowedCharacter']);
                     if(elementValidate['ControlName']=='TextBox'){
                         inpOnBlur =' onblur="checkLength(this,'+atributeId+','+'<?php echo $DependentMasterIds['ProductionField']; ?>'+','+nxtSeq+','+elementValidate['MinLength']+'); '+mandateFunction+elementValidate['FunctionName']+'(this.id, this.value,'+'\''+elementValidate['AllowedCharacter'] + '\', '+'\''+elementValidate['NotAllowedCharacter']+'\', '+'\''+elementValidate['Dateformat']+'\', '+'\''+elementValidate['AllowedDecimalPoint']+'\');" maxlength="'+elementValidate['MaxLength']+'" minlength="'+elementValidate['MinLength']+'"';   
                     }else if(elementValidate['ControlName']=='DropDownList'){
                         inpOnBlur =' onblur="'+mandateFunction+elementValidate['FunctionName']+'(this.id, this.value,'+'\''+elementValidate['AllowedCharacter'] + '\', '+'\''+elementValidate['NotAllowedCharacter']+'\', '+'\''+elementValidate['Dateformat']+'\', '+'\''+elementValidate['AllowedDecimalPoint']+'\');"';   
                     }
                        //alert(inpOnBlur);
                        //onblur="NumbersOnly(this.id, this.value,'', '', '', 'null');" maxlength="null" minlength="null"
                    if(element['ControlName']=='TextBox')
                        toappendData +='<input '+inpOnBlur+' type="text" class="wid-100per inputsubGrp_'+groupId+'_'+subgrpId+' form-control doOnBlur '+dbClass+'" id="' + inpId + '"  name="' + inpName + '" onclick="getThisId(this);loadWebpage('+atributeId+', '+pam+', '+groupId+', '+subgrpId+', '+nxtSeq+', 0);">' ;
                    if(element['ControlName']=='MultiTextBox') {
                    toappendData += '<textarea id=COpyTeXt_' + atributeId + '_' + nxtSeq + ' readonly="readonly" class="wid-100per inputsubGrp_'+groupId+'_'+subgrpId+' form-control"></textarea>';
                    if(element['Options'] != ''){
                        var inpName = 'ProductionField_' + atributeId + '_<?php echo $DependentMasterIds['ProductionField']; ?>_' + nxtSeq+'[]';
                        toappendData +='<select multiple="true" '+inpOnBlur+' class="wid-100per inputsubGrp_'+groupId+'_'+subgrpId+' testmulti doOnBlur UpdateFields removeinputclass"  id="' + inpId + '" name="' + inpName + '" >';

                    jQuery.each(element['Options'], function (i, val) {
                        toappendData +='<option value="'+val+'">'+val+'</option>';
                    });
                    toappendData +='</select>';
                    } else {
                        toappendData +='<textarea '+inpOnBlur+' class="wid-100per inputsubGrp_'+groupId+'_'+subgrpId+' form-control doOnBlur '+dbClass+'" id="' + inpId + '" name="' + inpName + '" onclick="getThisId(this);loadWebpage('+atributeId+', '+pam+', '+groupId+', '+subgrpId+', '+nxtSeq+', 0);"></textarea>' ;
                    }
                }
                if(element['ControlName']=='CheckBox')
                        toappendData +='<input '+inpOnBlur+' type="checkbox" class="inputsubGrp_'+groupId+'_'+subgrpId+' doOnBlur '+dbClass+'" id="' + inpId + '" name="' + inpName + '"  onclick="getThisId(this);loadWebpage('+atributeId+', '+pam+', '+groupId+', '+subgrpId+', '+nxtSeq+', 0);">' ;  
                if(element['ControlName']=='RadioButton'){
                        toappendData +='<input value="Yes" type="radio" style="position:static" class="inputsubGrp_'+groupId+'_'+subgrpId+' doOnBlur '+dbClass+'" id="' + inpId + '" name="' + inpName + '" onclick="getThisId(this);loadWebpage('+atributeId+', '+pam+', '+groupId+', '+subgrpId+', '+nxtSeq+', 0);"> Yes '+
                                        '<input value="No" type="radio" style="position:static" class="inputsubGrp_'+groupId+'_'+subgrpId+' doOnBlur '+dbClass+'" id="' + inpId + '" name="' + inpName + '" onclick="getThisId(this);loadWebpage('+atributeId+', '+pam+', '+groupId+', '+subgrpId+', '+nxtSeq+', 0);"> No ' ;  
                            }
                   if(element['ControlName']=='DropDownList') {
                        toappendData +='<select '+inpOnBlur+' onchange = '+reload+' class="inputsubGrp_'+groupId+'_'+subgrpId+' wid-100per form-control doOnBlur '+dbClass+'"  id="' + inpId + '" name="' + inpName + '" onclick="getThisId(this);loadWebpage('+atributeId+', '+pam+', '+groupId+', '+subgrpId+', '+nxtSeq+', 0);"><option value="">--Select--</option>';
                       
                      jQuery.each(element['Options'], function (i, val) {
                          toappendData +='<option value="'+val+'">'+val+'</option>';
                      });
                      toappendData +='</select>';
                  }
                    toappendData +='<span class="lighttext" data-toggle="tooltip" title=""></span>' +
                    '</div></div>' +
                    '<div class="col-md-2 form-text"><div class="form-group comments">' +
                    '<textarea rows="1" cols="50" class="form-control '+dbClass_cmd+'" id="" name="' + commendName + '" placeholder="Comments"></textarea>' +
                    '</div></div>' +
                    '<div class="col-md-3 form-status"><div class="form-group status">' +
                    '<select id="" name="' + selName + '" class="form-control CampaignWiseSelDone_' + groupId + ' subGrpDisp_'+groupId+'_'+subgrpId+' dispositionSelect '+dbClass_dis+'">' +
                    '<option value="">--</option>' +
                    '<option value="A">A</option>' +
                    '<option value="D">D</option>' +
                    '<option value="M">M</option>' +
                    '<option value="V">V</option>' +
                    '</select>' +
                    '<div><i class="fa fa-minus-circle remove-field m-r-10" style="padding:5px;" data="' + atributeId + '"></i></div></div>' +
                    '</div></div>';

            $('.add_' + atributeId).append(toappendData);
            $('.ShowingSeqDiv_' + atributeId).attr("data", nxtSeq);

            Load_totalAttInThisGrpCnt();
                    $('.testmulti').fSelect();
           //  checkAll(groupId,subgrpId);
        }
        function addSubgrpAttribute(subgrpId,groupId){
            

             var a = [];
            
           
             //alert('<?php //echo json_encode($AttributesListGroupWise); ?>');
            var subGrpArr='<?php echo str_replace("'", "\\'", json_encode($AttributesListGroupWise))?>';
            var subGrpAtt = JSON.parse(subGrpArr);
            
            //var subGrpArrValidate='<?php echo str_replace("'", "\\'", json_encode($validate))?>';
            var subGrpArrValidate='<?php echo stripslashes(json_encode($validate))?>';
            var subGrpAttValidate = JSON.parse(subGrpArrValidate);
            
            var subGrpAttArr = subGrpAtt[groupId][subgrpId];
            var groupName = 'Organization Status';

            var maxSeqCnt = $('.GroupSeq_' + subgrpId).attr("data");
            maxSeq='<?php echo json_encode($maxSeq);?>';
            maxSeqArr=JSON.parse(maxSeq);
            
            
            //maxSeqCnt=1;
            var nxtSeq = parseInt(maxSeqCnt) + 1;
            var prodDep='<?php echo $DependentMasterIds['ProductionField']; ?>';
            var cmdDep='<?php echo $DependentMasterIds['Comments']; ?>';
            var disDep='<?php echo $DependentMasterIds['Disposition']; ?>';
            if(nxtSeq<=maxSeqArr[prodDep])
                var dbClass='UpdateFields';
            else
                var dbClass='InsertFields';
            if(nxtSeq<=maxSeqArr[cmdDep]) 
                var dbClass_cmd='UpdateFields';
            else
                var dbClass_cmd='InsertFields';
            
            if(nxtSeq<=maxSeqArr[disDep]) 
                var dbClass_dis='UpdateFields';
            else
                var dbClass_dis='InsertFields';
            
            
            toappendData = '<div ><font style="color:#62A8EA">Page : <b>' + nxtSeq + '</b></font><i class="fa fa-minus-circle removeGroup-field pull-right" data="' + subgrpId + '" style="top:0px"></i><br>';
            $.each(subGrpAttArr, function (key, element) {
                //alert (JSON.stringify(element));
                atributeId = element['AttributeMasterId'];
                ProjAttributeId = element['ProjectAttributeMasterId'];
                var elementValidate = subGrpAttValidate[ProjAttributeId];
                 var inpId = 'ProductionFields_' + atributeId + '_<?php echo $DependentMasterIds['ProductionField']; ?>_' + nxtSeq;
                var inpName = 'ProductionFields_' + atributeId + '_<?php echo $DependentMasterIds['ProductionField']; ?>_' + nxtSeq;
                var commendName = 'ProductionFields_' + atributeId + '_<?php echo $DependentMasterIds['Comments']; ?>_' + nxtSeq;
                var selName = 'ProductionFields_' + atributeId + '_<?php echo $DependentMasterIds['Disposition']; ?>_' + nxtSeq;
                
                
                //alert(inpName);
				
				var pam = element['ProjectAttributeMasterId'];
                                var reload = 'LoadValue('+pam+',this.value,'+elementValidate['Reload']+','+ atributeId +','+'<?php echo $DependentMasterIds['ProductionField']; ?>'+','+ nxtSeq +');';
				//  var reload = elementValidate['Reload'] +','+ atributeId +','+'<?php echo $DependentMasterIds['ProductionField']; ?>'+','+ nxtSeq +');';
                                var IsMandatory=elementValidate['IsMandatory'];
                                        var DisplayAttributeName=elementValidate['DisplayAttributeName'];
                                        var mandateFunction ='';
                                         if(IsMandatory==1){
                                         var mandateFunction = 'MandatoryValue(this.id,this.value,'+'\''+DisplayAttributeName+'\');';
                                         }
                                          else{
                                          var mandateFunction =''; 
                                         }
                             var inpOnBlur ='';
                             elementValidate['AllowedCharacter'] = addslashes(elementValidate['AllowedCharacter']);
                             elementValidate['NotAllowedCharacter'] = addslashes(elementValidate['NotAllowedCharacter']);
                     if(elementValidate['ControlName']=='TextBox'){
                         inpOnBlur =' onblur="checkLength(this,'+atributeId+','+'<?php echo $DependentMasterIds['ProductionField']; ?>'+','+nxtSeq+','+elementValidate['MinLength']+'); '+mandateFunction+elementValidate['FunctionName']+'(this.id, this.value,'+'\''+elementValidate['AllowedCharacter'] + '\', '+'\''+elementValidate['NotAllowedCharacter']+'\', '+'\''+elementValidate['Dateformat']+'\', '+'\''+elementValidate['AllowedDecimalPoint']+'\');" maxlength="'+elementValidate['MaxLength']+'" minlength="'+elementValidate['MinLength']+'"';   
                     }else if(elementValidate['ControlName']=='DropDownList'){
                         inpOnBlur =' onblur="'+mandateFunction+elementValidate['FunctionName']+'(this.id, this.value,'+'\''+elementValidate['AllowedCharacter'] + '\', '+'\''+elementValidate['NotAllowedCharacter']+'\', '+'\''+elementValidate['Dateformat']+'\', '+'\''+elementValidate['AllowedDecimalPoint']+'\');"';   
                     }
				
                toappendData += '<div id="MultiField_' + atributeId + '_' + nxtSeq + '" style="border-bottom: 1px dotted rgb(196, 196, 196) !important"  class=" row form-responsive clearfix MultiField_' + atributeId + ' CampaignWiseFieldsDiv_' + groupId + '">' +
                        '<div class="col-md-3 form-title"><div class="form-group" style=""><p>' + element['DisplayAttributeName'] + '</p></div></div>' +
                        '<div class="col-md-4 form-text"><div class="form-group">' ;
                if(element['ControlName']=='TextBox')
                        toappendData +='<input '+inpOnBlur+' type="text" class="inputsubGrp_'+groupId+'_'+subgrpId+' wid-100per form-control doOnBlur '+dbClass+'" id="' + inpId + '" name="' + inpName + '" onclick="getThisId(this);loadWebpage('+atributeId+', '+pam+', '+groupId+', '+subgrpId+', '+nxtSeq+', 0);">' ;
//-------->>>>>>>>>>>>Onload MultiText Box<<<<<<<<<<<-----------
		if(element['ControlName']=='MultiTextBox') {
                    toappendData += '<textarea id=COpyTeXt_' + atributeId + '_' + nxtSeq + ' readonly="readonly" class="inputsubGrp_'+groupId+'_'+subgrpId+' wid-100per form-control"></textarea>';
                    if(element['Options'] != ''){
                        var inpName = 'ProductionField_' + atributeId + '_<?php echo $DependentMasterIds['ProductionField']; ?>_' + nxtSeq+'[]';
                        toappendData +='<select multiple="true" '+inpOnBlur+' class="inputsubGrp_'+groupId+'_'+subgrpId+' wid-100per testmulti doOnBlur UpdateFields removeinputclass hidden"  id="' + inpId + '" name="' + inpName + '" >';

                    jQuery.each(element['Options'], function (i, val) {
                        toappendData +='<option value="'+val+'">'+val+'</option>';
                    });
                    toappendData +='</select>';
                    } else {
                        toappendData +='<textarea '+inpOnBlur+' class="inputsubGrp_'+groupId+'_'+subgrpId+' wid-100per form-control doOnBlur '+dbClass+'" id="' + inpId + '" name="' + inpName + '" onclick="getThisId(this);loadWebpage('+atributeId+', '+pam+', '+groupId+', '+subgrpId+', '+nxtSeq+', 0);"></textarea>' ;
                    }
                }if(element['ControlName']=='CheckBox')
                        toappendData +='<input '+inpOnBlur+' type="checkbox" class="inputsubGrp_'+groupId+'_'+subgrpId+' doOnBlur '+dbClass+'" id="' + inpId + '" name="' + inpName + '" onclick="getThisId(this);loadWebpage('+atributeId+', '+pam+', '+groupId+', '+subgrpId+', '+nxtSeq+', 0);">' ;  
                if(element['ControlName']=='RadioButton'){
                        toappendData +='<input '+inpOnBlur+' value="Yes" type="radio" style="position:static"  class="inputsubGrp_'+groupId+'_'+subgrpId+' doOnBlur InsertFields" id="' + inpId + '" name="' + inpName + '" onclick="getThisId(this);loadWebpage('+atributeId+', '+pam+', '+groupId+', '+subgrpId+', '+nxtSeq+', 0);"> Yes '+
                                        '<input '+inpOnBlur+' value="No" type="radio" style="position:static"  class="inputsubGrp_'+groupId+'_'+subgrpId+' doOnBlur InsertFields" id="' + inpId + '" name="' + inpName + '" onclick="getThisId(this);loadWebpage('+atributeId+', '+pam+', '+groupId+', '+subgrpId+', '+nxtSeq+', 0);"> No ' ;  
                            }
                   if(element['ControlName']=='DropDownList') {
                        toappendData +='<select '+inpOnBlur+' onchange='+reload+' class="inputsubGrp_'+groupId+'_'+subgrpId+' wid-100per form-control doOnBlur '+dbClass+'"  id="' + inpId + '" name="' + inpName + '" onclick="getThisId(this);loadWebpage('+atributeId+', '+pam+', '+groupId+', '+subgrpId+', '+nxtSeq+', 0);"><option value="">--Select--</option>';
                       
                      jQuery.each(element['Options'], function (i, val) {
                          toappendData +='<option value="'+val+'">'+val+'</option>';
                      });
                      toappendData +='</select>';
                  }
                       
                       
                        toappendData +='<span class="lighttext" data-toggle="tooltip" title=""></span>' +
                        '</div></div>' +
                        '<div class="col-md-2 form-text"><div class="form-group comments">' +
                        '<textarea rows="1" cols="50" class="form-control '+dbClass_cmd+'" id="" name="' + commendName + '" placeholder="Comments"></textarea>' +
                        '</div></div>' +
                        '<div class="col-md-3 form-status"><div class="form-group status">' +
                        '<select id="" name="' + selName + '" class="form-control CampaignWiseSelDone_' + groupId + ' subGrpDisp_'+groupId+'_'+subgrpId+' dispositionSelect '+dbClass_dis+'">' +
                        '<option value="">--</option>' +
                        '<option value="A">A</option>' +
                        '<option value="D">D</option>' +
                        '<option value="M">M</option>' +
                        '<option value="V">V</option>' +
                        '</select>' +
                        '</div>' +
                        '</div></div>';

            });

            toappendData += '</div>';
            //alert(toappendData);
            $('.addGrp_' + subgrpId).append(toappendData);
            $('.GroupSeq_' + subgrpId).attr("data", nxtSeq);

            Load_totalAttInThisGrpCnt();
                    $('.testmulti').fSelect();
       //  checkAll(groupId,subgrpId);
        }
        
            
//            $( ".page-title" ).bind( "dblclick", function() {
//                var sel = (document.selection && document.selection.createRange().text) ||
//                          (window.getSelection && window.getSelection().toString());
//                $(AttrcopyId).val(sel);
//            });
        //-------------------------ondblclick html end-----------------//
            

        $(document).ready(function () {

            $('#multiplelinkbutton').hide();
            //$('.chk-wid-Url').hide();
            
            var FirstAttrId = '<?php echo $FirstAttrId; ?>';
            var FirstProjAttrId = '<?php echo $FirstProjAttrId; ?>';
            var FirstGroupId = '<?php echo $FirstGroupId; ?>';
            var FirstSubGroupId = '<?php echo $FirstSubGroupId; ?>';

            var projectid = $('#ProjectId').val();
            var regionid = $('#RegionId').val();
            var inputentityid = $('#InputEntityId').val();
            var prodentityid = $('#ProductionEntity').val();

            i = 0;
            var spanArr = [];
            var sequence = 1;

            $.ajax({
                type: "POST",
                url: "<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'ajaxLoadfirstattribute')); ?>",
                data: ({ProjectId: projectid, RegionId: regionid, InputEntityId: inputentityid, ProdEntityId: prodentityid, groupId: FirstGroupId, seq: sequence}),
                dataType: 'text',
                async: true,
                success: function (result) {
                    if (result != '' && result != null) {
                        $('.CntBadge').hide();
                        var obj = JSON.parse(result);

                        if (obj['attrinitialhtml'] != '' && obj['attrinitialhtml'] != null) {
                            $('#exampleTabsOne').show();
                            var htmlfileinitial = "<?php echo HTMLfilesPath; ?>" + obj['attrinitialhtml'];
                            document.getElementById('frame1').data = htmlfileinitial;
							
							var object = document.getElementById("frame1");
							object.onload = function () {
								//spanArr = $("object").contents().find('span');
								$("object").contents().find('.annotated').each(function () {
									var $span = $(this);
									var spanId = $span.attr('data');
									if (typeof (spanId) != "undefined" && spanId !== null && $(this).text() != '') {
									   $span.attr('onClick', "parent.focusProjeId('" + spanId + "');");
								  }
								});
							};
							
                        } else if (obj['attrinitiallink'] != '' && obj['attrinitiallink'] != null) {
                            $('#exampleTabsOne').show();
                            document.getElementById('frame1').data = obj['attrinitiallink'];
                        }
                        
						if (typeof obj['attrcnt'] !== 'undefined' && obj['attrcnt'] != null) {
							obj['attrcnt'].forEach(function (element) {

								if (element['cnt'] > 0) {
									$('#CntBadge_' + element['AttributeMainGroupId']).show();
									$('#CntBadge_' + element['AttributeMainGroupId']).text(element['cnt']);
									//document.getElementById('CntBadge_' + element['AttributeMainGroupId']).innerHTML = ;
								}
							});
						}
                    }
                }
            });
            
//            $('#attrGroupId').val(FirstGroupId);
//                $('#attrSubGroupId').val(FirstSubGroupId);
//                $('#attrId').val(FirstAttrId);
//                $('#ProjattrId').val(FirstProjAttrId);
//                $('#seq').val(sequence);
                 });
//            $.ajax({
//                type: "POST",
//                url: "<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'ajaxLoadfirstattribute')); ?>",
//                data: ({ProjectId: projectid, RegionId: regionid, InputEntityId: inputentityid, ProdEntityId: prodentityid, Attr: FirstAttrId, ProjAttr: FirstProjAttrId, MainGrp: FirstGroupId, SubGrp: FirstSubGroupId}),
//                dataType: 'text',
//                async: true,
//                success: function (result) {
//                    $('#prodInput_' + FirstAttrId).focus();
//                    var obj = JSON.parse(result);
//
//                    //obj['attrinitialhtml']='1.html';
//
//                    if (obj['attrinitialhtml'] != '' && obj['attrinitialhtml'] != null) {
//
////                            $('#exampleTabsOne').show();
////                            var htmlfileinitial = "<?php echo HTMLfilesPath; ?>" + obj['attrinitialhtml'];
////                            document.getElementById('frame1').data = htmlfileinitial;
//
//                        var object = document.getElementById("frame1");
//
//                        object.onload = function () {
//                            //spanArr = $("object").contents().find('span');
//                            $("object").contents().find('.annotated').each(function () {
//                                var $span = $(this);
//                                var spanId = $span.attr('data');
//                                if (typeof (spanId) != "undefined" && spanId !== null && $(this).text() != '') {
//                                    $span.attr('onClick', "parent.focusProjeId('" + spanId + "');");
//                                }
//                            });
//                        };
//
//                        //      $('#prodInput_' + FirstAttrId).focus();
//
//
//                    } else if (obj['attrinitiallink'] != '' && obj['attrinitiallink'] != null) {
//
////                            $('#exampleTabsOne').show();
////                            document.getElementById('frame1').data = obj['attrinitiallink'];
//                        //  $('#prodInput_' + FirstAttrId).focus();
//                    }
//                }
//            });
            // loadWebpage(FirstAttrId, FirstProjAttrId, FirstGroupId, FirstSubGroupId, sequence, 0);
       

        function focusProjeId(projId) {

            var projArr = projId.split('(');
            var ProjAttribute = projArr[0];
            var jsonArr = '<?php echo str_replace("'", "\\'",json_encode($ModuleAttributes)); ?>';
            jsonArr = JSON.parse(jsonArr);
            var proKey;
            var mainGrp;
            var subgroup;
            var sequence;
            var projattr;
            jQuery.each(jsonArr, function (i, val) {
                if (val['AttributeName'] == ProjAttribute) {
                    proKey = val['AttributeMasterId'];
                   projattr = val['ProjectAttributeMasterId'];
                    mainGrp = val['MainGroupId'];
                   subgroup = val['SubGroupId'];
                   sequence = 1;
                }
            });

        

            // $('#exampleAccordionContinuous').collapse('');
            $("#exampleAccordionContinuous>div>div>a.panel-title").addClass("collapsed");
            $("#exampleAccordionContinuous>div>div>a.panel-title").attr("aria-expanded", "false");
            ;
            $("#exampleAccordionContinuous>div>div.in").attr("aria-expanded", "false");
            ;
            $("#exampleAccordionContinuous>div>div.in").removeClass("in");



            $("#" + mainGrp).attr("aria-expanded", "true");
            $('#' + mainGrp).removeClass("collapsed");
            var href = $("#" + mainGrp).attr("href");
            $(href).attr("aria-expanded", "true");
            $(href).addClass("in");
            //$(href).attr( "style:4500!important" );
            depen='<?php echo $dependency; ?>';
            //alert(depen);
            document.getElementById('ProductionFields_'+proKey+'_'+depen+'_1').focus();
            $(href).height("auto");
            loadWebpage(proKey, projattr, mainGrp, subgroup, sequence, 0);

        }
        // Script for bottom side flip canvas starts
        $(document).ready(function () {
            $('#document-tag, #page-tag').iptOffCanvas({
                baseClass: 'offcanvas',
                type: 'bottom' // top, right, bottom, left.
            });
        });
        // Script for bottom side flip canvas ends

        // Script for bottom side flip canvas starts
        $(document).ready(function () {
            $('#document-tag, #page-tag').iptOffCanvas({
                baseClass: 'offcanvas',
                type: 'bottom' // top, right, bottom, left.
            });
        });
        // Script for bottom side flip canvas ends

        function loadHelpContent(AttributeMasterId, DisplayAttributeName) {
            var attributeId = AttributeMasterId;
            var projectid = $('#ProjectId').val();
            var regionid = $('#RegionId').val();

            //            alert(projectid+"_"+regionid+"_"+attributeId);

            $.ajax({
                type: "POST",
                url: "<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'ajaxhelptooltip')); ?>",
                data: ({ProjectId: projectid, RegionId: regionid, attributeId: attributeId}),
                dataType: 'text',
                async: true,
                success: function (result) {
                    $("#HelpModelContent").html(result);
                    $("#HelpModelAttribute").html(DisplayAttributeName);
                }
            });
        }

        $('.save').click(function () {

            var text = $('#addurl').val();
            if (text == '') {
                alert("Enter Url..");
                $('#addurl').focus();
                return false;
            } else {
                var re = /^(http[s]?:\/\/){0,1}(www\.){0,1}[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,5}[\.]{0,1}/;
                if (!re.test(text)) {
                    alert("Enter Valid Url");
                    $('#addurl').focus();
                    return false;
                }
                var projectid = $('#ProjectId').val();
                var regionid = $('#RegionId').val();
                var inputentityid = $('#InputEntityId').val();
                var prodentityid = $('#ProductionEntity').val();
                var attrGrpid = $('#attrGroupId').val();
                var attrSubGrpid = $('#attrSubGroupId').val();
                var attrid = $('#attrId').val();
                var Projattrid = $('#ProjattrId').val();
                var sequence = $('#seq').val();

                $.ajax({
                    type: "POST",
                    url: "<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'ajaxinsertreferenceurl')); ?>",
                    data: ({NewUrl: text, ProjectId: projectid, RegionId: regionid, InputEntityId: inputentityid, ProdEntityId: prodentityid, AttrGroup: attrGrpid, AttrSubGroup: attrSubGrpid, AttrId: attrid, ProjAttrId: Projattrid, Seq: sequence}),
                    dataType: 'text',
                    async: true,
                    success: function (result) {
                        if (result === 'Inserted') {
                            //alert("Inserted Successfully");
                            loadWebpage(attrid, Projattrid, attrGrpid, attrSubGrpid, sequence, 1);
                            loadReferenceUrl();

                        }
                    }
                });
                $('#addnewurl').hide();
            }
        });

        $('.multi-field-wrapper').each(function () {
            var $wrapper = $('.multi-fields', this);
            var $i = 1;
            $(".add-field", $(this)).click(function (e) {

                var AttrMasterId = document.getElementById("add-field").title;
                //                alert(AttrMasterId);
                $('.multi-field:last-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();
                $('#prodInput_' + AttrMasterId).attr('id', 'prodInput_' + AttrMasterId + '_' + $i);
                $('#prodComments_' + AttrMasterId).attr('id', 'prodComments_' + AttrMasterId + '_' + $i);
                $('#prodStatus_' + AttrMasterId).attr('id', 'prodStatus_' + AttrMasterId + '_' + $i);
                $('#branch_inputvalue_' + AttrMasterId).attr('id', 'branch_inputvalue_' + AttrMasterId + '_' + $i);
                $('#prodInput_' + AttrMasterId).val('');
                $('#prodComments_' + AttrMasterId).val('');
                $('#prodStatus_' + AttrMasterId).val(0);
                $('#branch_inputvalue_' + AttrMasterId).empty();

                //                var spans = $('.lighttext');
                //                var spans = $('#branch_inputvalue_'+$i);
                //                spans.text(''); // clear the text
                //                spans.hide(); // make them display: none
                //                spans.remove(); // remove them from the DOM completely
                //                spans.empty();  // remove all their content

                $i++;
            });
            $('.multi-field .remove-field', $wrapper).click(function () {
                if ($('.multi-field', $wrapper).length > 1)
                    $(this).parent('.multi-field').remove();
            });

        });




        // Script for Add/Remove Ends

        // Script for enhsplitter Starts
        jQuery(function ($) {
            //$('#splitter-block').enhsplitter();
            $('#splitter-block').enhsplitter({handle: 'bar', position: 350, leftMinSize: 0, fixed: false});
        });
        // Script for enhsplitter Ends

        // onclick website
        function loadWebpage(attr, projattr, maingroup, subgroup, seq, val) {

            var attrGrpid = $('#attrGroupId').val();
            var attrSubGrpid = $('#attrSubGroupId').val();
            var attrid = $('#attrId').val();
            var Projattrid = $('#ProjattrId').val();

            var projectid = $('#ProjectId').val();
            var regionid = $('#RegionId').val();
            var inputentityid = $('#InputEntityId').val();
            var prodentityid = $('#ProductionEntity').val();
            var sequence = $('#seq').val();
			
			//AttrcopyId = $( "#prodInput_"+attr ).focus();

//            if (attr == attrid && Projattrid == projattr && attrGrpid == maingroup && attrSubGrpid == subgroup && val == 0 && (sequence == seq || sequence == 0)) {
//                return false;
//            } else {
                //   $('#exampleTabsOne').hide();
                //$('#exampleTabsTwo').hide();
                $('#multiplelinkbutton').show();
                $.ajax({
                    type: "POST",
                    url: "<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'ajaxgetafterreferenceurl')); ?>",
                    data: ({ProjectId: projectid, RegionId: regionid, InputEntityId: inputentityid, ProdEntityId: prodentityid, Attr: attr, ProjAttr: projattr, MainGrp: maingroup, SubGrp: subgroup, seq: seq}),
                    dataType: 'text',
                    async: true,
                    success: function (result) {

                        //   $('#exampleTabsOne').hide();
                        //   $('#exampleTabsTwo').hide();
                        $("#LoadAttrValue").empty();
						//alert('test');
                        //$('#exampleTabsOne').hide();
                        //$('#exampleTabsTwo').hide();
                        //$("#LoadAttrValue").empty();

                        if (result != '' && result != null) {
                            $("#LoadAttrValue").empty();
                            var obj = JSON.parse(result);
                            if (obj['attrval'] != '' && obj['attrval'] != null) {
                                obj['attrval'].forEach(function (element) {
                                    if (element['AttributeValue'] != '' && element['AttributeValue'] != null) {
                                        var cols = "";
                                        cols += '<div class="col-xs-12 col-xl-4">';
                                        cols += '<div class="srcblock box1 update-cart offcanvas__trigger--close" id="demo">';
                                        cols += '<i class="fa fa-times-circle edit1 lite-blue" onclick="DeleteUrl(' + attr + ',' + projattr + ',' + maingroup + ',' + subgroup + ',' + element['Id'] + ');"></i>';
//                                        if (element['HtmlFileName'] != '' && element['HtmlFileName'] != null) {
//                                            var htmlfile = element['HtmlFileName'];
//                                            cols += '<a href="#" title=' + element['AttributeValue'] + ' value="' + htmlfile + '" id="' + htmlfile + '" onclick="loadPDF(this.id,1);" class="current text-center text update-cart">' + element['AttributeValue'].substring(0, 45) + '</a>';
//                                        } else {
                                            cols += '<span class="badge CntBadge" style="display: inline-block;">' + element['attrcnt'] + '</span> <a href="#" title=' + element['AttributeValue'] + ' value=' + element['AttributeValue'] + ' id=' + element['AttributeValue'] + ' onclick="loadPDF(this.id);" class="current text-center text update-cart">' + element['AttributeValue'].substring(0, 45) + '</a>';
                                       // }
                                        cols += '</div>';
                                        cols += '</div>';
                                        $("#LoadAttrValue").append(cols);
                                    } else {
                                        var colsEmpty = "";
                                        colsEmpty += "No URL found";
                                        $("#LoadAttrValue").append(colsEmpty);
                                    }
                                });
                            } else {
                                var colsEmpty = "";
                                colsEmpty += "No URL found";
                                $("#LoadAttrValue").append(colsEmpty);
                            }
//                                if (val != 1) {
//                                    if (obj['attrinitialhtml'] != '' && obj['attrinitialhtml'] != null) {
//                                        $('#exampleTabsOne').show();
//
//                                        var htmlfileinitial = "<?php echo HTMLfilesPath; ?>" + obj['attrinitialhtml'];
//                                        document.getElementById('frame1').data = htmlfileinitial;
//                                    } else if (obj['attrinitiallink'] != '' && obj['attrinitiallink'] != null) {
//                                        $('#exampleTabsOne').show();
//
//                                        document.getElementById('frame1').data = obj['attrinitiallink'];
//                                    }
//                                }
//							if (typeof obj['attrcnt'] !== 'undefined' && obj['attrcnt'] != null) {
//								obj['attrcnt'].forEach(function (element) {
//
//									if (element['cnt'] > 0) {
//										$('#CntBadge_' + element['AttributeMainGroupId']).show();
//										$('#CntBadge_' + element['AttributeMainGroupId']).text(element['cnt']);
//										//document.getElementById('CntBadge_' + element['AttributeMainGroupId']).innerHTML = ;
//									}
//
//								});
//							}
                        } else {
                            var colsEmpty = "";
                            colsEmpty += "No URL found";
                            $("#LoadAttrValue").append(colsEmpty);
                        }
                    }
                });


                $('#attrGroupId').val(maingroup);
                $('#attrSubGroupId').val(subgroup);
                $('#attrId').val(attr);
                $('#ProjattrId').val(projattr);
                $('#seq').val(seq);
          //  }

        }

        function DeleteUrl(attr, projattr, maingroup, subgroup, id) {

            var projectid = $('#ProjectId').val();
            var regionid = $('#RegionId').val();
            var inputentityid = $('#InputEntityId').val();
            var prodentityid = $('#ProductionEntity').val();
            var sequence = $('#seq').val();

            var getConform = confirm("Are You Sure you want to Delete?");
            if (getConform) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'ajaxdeletereferenceurl')); ?>",
                    data: ({ProjectId: projectid, RegionId: regionid, InputEntityId: inputentityid, ProdEntityId: prodentityid, Attr: attr, ProjAttr: projattr, MainGrp: maingroup, SubGrp: subgroup, Id: id, Seq: sequence}),
                    dataType: 'text',
                    async: true,
                    success: function (result) {
                        if (result === 'Deleted') {
                            //alert("Deleted Successfully");
                            loadWebpage(attr, projattr, maingroup, subgroup, sequence, 1);
                            loadReferenceUrl();
                        }
                    }
                });
                return true;
            } else {
                return false;
            }

        }

        function loadPDF(file)
        {
            $('#exampleTabsOne').show();
            $('#refUrl').val(file);
           // var cookieValue = anchor.getAttribute('value');
//           var cookieValue = file;
//
//            var htmlfile = "<?php echo HTMLfilesPath; ?>" + cookieValue;
//            document.getElementById('frame1').data = htmlfile;

            var text = file;
            if (text == '') {
                return false;
            } else {
                var projectid = $('#ProjectId').val();
                var regionid = $('#RegionId').val();
                var inputentityid = $('#InputEntityId').val();
                var prodentityid = $('#ProductionEntity').val();
                var attrGrpid = $('#attrGroupId').val();
                var attrSubGrpid = $('#attrSubGroupId').val();
                var attrid = $('#attrId').val();
                var Projattrid = $('#ProjattrId').val();
                var sequence = $('#seq').val();

                $.ajax({
                    type: "POST",
                    url: "<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'ajaxloadmultipleurl')); ?>",
                    data: ({NewUrl: text, ProjectId: projectid, RegionId: regionid, InputEntityId: inputentityid, ProdEntityId: prodentityid, AttrGroup: attrGrpid, AttrSubGroup: attrSubGrpid, AttrId: attrid, ProjAttrId: Projattrid, seq: sequence}),
                    dataType: 'text',
                    async: true,
                    success: function (result) {
                        if (result != '' && result != null) {
                            var obj = JSON.parse(result);
                            $('.CntBadge').hide();
                            $('#exampleFillIn').modal('hide');
                            $(".multisorcedivclose").trigger("click");
                             if (obj['htmlfile'] != '' && obj['htmlfile'] != null) {
                                $('#exampleTabsOne').show();
                                var htmlfile = "<?php echo HTMLfilesPath; ?>" + obj['htmlfile'];
                                document.getElementById('frame1').data = htmlfile;
								
								var object = document.getElementById("frame1");
								object.onload = function () {
									//spanArr = $("object").contents().find('span');
									$("object").contents().find('.annotated').each(function () {
										var $span = $(this);
										var spanId = $span.attr('data');
										if (typeof (spanId) != "undefined" && spanId !== null && $(this).text() != '') {
										   $span.attr('onClick', "parent.focusProjeId('" + spanId + "');");
									  }
									});
								};
								
                                } else {
                                $('#exampleTabsOne').show();
                                document.getElementById('frame1').data = text;
                                }
                            
                           obj['attrCount'].forEach(function (element) {
                                if (element['cnt'] > 0) {
                                    $('#CntBadge_' + element['AttributeMainGroupId']).show();
                                    document.getElementById('CntBadge_' + element['AttributeMainGroupId']).innerHTML = element['cnt'];
                                }
                            });
							
							
							gotattributeids = obj['attrid'];
							gotattributemaingrpid = attrGrpid;
							checkAllUrlAtt();
            }
        }
                });
            }
        }

        function loadPDFUrl(file) {
     
            $('#exampleTabsOne').show();
            $('#refUrl').val(file);
            $('.update-cart').click(function (e) {
                e.preventDefault();
                return false;
            });
            //$("#frame1").attr('data', file).hide().show();
            var text = file;
            if (text == '') {
                return false;
            } else {
                var projectid = $('#ProjectId').val();
                var regionid = $('#RegionId').val();
                var inputentityid = $('#InputEntityId').val();
                var prodentityid = $('#ProductionEntity').val();
                var attrGrpid = $('#attrGroupId').val();
                var attrSubGrpid = $('#attrSubGroupId').val();
                var attrid = $('#attrId').val();
                var Projattrid = $('#ProjattrId').val();
                var sequence = $('#seq').val();

                $.ajax({
                    type: "POST",
                    url: "<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'ajaxloadgroupurl')); ?>",
                    data: ({NewUrl: text, ProjectId: projectid, RegionId: regionid, InputEntityId: inputentityid, ProdEntityId: prodentityid, AttrGroup: attrGrpid, AttrSubGroup: attrSubGrpid, AttrId: attrid, ProjAttrId: Projattrid, seq: sequence}),
                    dataType: 'text',
                    async: true,
                    success: function (result) {
                        if (result != '' && result != null) {
                             $('.CntBadge').hide();
                            $('#exampleFillIn').modal('hide');
                            $(".multisorcedivclose").trigger("click");
                            
                            var obj = JSON.parse(result);
                           if (obj['htmlfile'] != '' && obj['htmlfile'] != null) {
                                $('#exampleTabsOne').show();
                                var htmlfile = "<?php echo HTMLfilesPath; ?>" + obj['htmlfile'];
                                document.getElementById('frame1').data = htmlfile;
								
								var object = document.getElementById("frame1");
								object.onload = function () {
									//spanArr = $("object").contents().find('span');
									$("object").contents().find('.annotated').each(function () {
										var $span = $(this);
										var spanId = $span.attr('data');
										if (typeof (spanId) != "undefined" && spanId !== null && $(this).text() != '') {
										   $span.attr('onClick', "parent.focusProjeId('" + spanId + "');");
									  }
									});
								};
								
                                } else {
                                $('#exampleTabsOne').show();
                                document.getElementById('frame1').data = text;
                                }

                            obj['attrCount'].forEach(function (element) {
                                if (element['cnt'] > 0) {
                                    $('#CntBadge_' + element['AttributeMainGroupId']).show();
                                    document.getElementById('CntBadge_' + element['AttributeMainGroupId']).innerHTML = element['cnt'];
                                }
                            });
							
                            gotattributeids = obj['attrid'];
                            gotattributemaingrpid = attrGrpid;
                            checkAllUrlAtt();
            }
        }
                });
            }
        }
		
		function checkAllUrlAtt(Seq=1){
               
			//alert(gotattributeids);
			$('.subgroupparentdivs').show();  
		    $('.commonClass').show(); 
		    $('.commonClass').removeClass("myyourclass");
			 var sat = $("#chk-wid-Url").prop("checked");
			 if(sat)  {
				 //alert('dfdf');
				//$('.commonclass_'+gotattributemaingrpid).hide(); 
				if (gotattributeids.length > 0) {
					$('.commonClass').hide(); 
					gotattributeids.forEach(function (element) {
						//alert(element['AttributeMasterId']);
						if (element['AttributeMasterId'] > 0) {
                                                   
							$('#groupAttr_' + element['AttributeMasterId']+'_'+Seq).css("display", "block");
                                                            $('#groupAttr_' + element['AttributeMasterId']+'_'+Seq).addClass("myyourclass");
						}
					});
					
					//$(".subgroupparentdivs_"+gotattributemaingrpid).each(function() {
					$(".subgroupparentdivs").each(function() {
						var count = $(this).find(".myyourclass").length;
						if(count<=0) {
							$(this).hide();
						}
					});
				}
				
			}
			else {
				  $('.subgroupparentdivs').show();  
				  $('.commonClass').show();  
			}
                        ShowUnVerifiedAtt();
		}
		function checkAllUrlAttPaginate(subgrp,Seq=1){
		
			//alert(gotattributeids);
			//$('.subgroupparentdivs').show();  
		    $( "#MultiSubGroup_" + subgrp + "_" + Seq ).has('.commonClass').show(); 
		    $( "#MultiSubGroup_" + subgrp + "_" + Seq ).has('.commonClass').removeClass("myyourclass");
			 var sat = $("#chk-wid-Url").prop("checked");
			 if(sat)  {
				 //alert('dfdf');
				//$('.commonclass_'+gotattributemaingrpid).hide(); 
				if (gotattributeids.length > 0) {
					$( "#MultiSubGroup_" + subgrp + "_" + Seq > '.commonClass').hide(); 
                                        
                                        
					gotattributeids.forEach(function (element) {
						//alert(element['AttributeMasterId']);
						if (element['AttributeMasterId'] > 0) {
                                                    
                                                    if($( "#MultiSubGroup_" + subgrp + "_" + Seq ).has('#groupAttr_' + element['AttributeMasterId']+'_'+Seq).length) {
							    $('#groupAttr_' + element['AttributeMasterId']+'_'+Seq).css("display", "block");
                                                            $('#groupAttr_' + element['AttributeMasterId']+'_'+Seq).addClass("myyourclass");
                                                        }
						}
					});
					$(".subgroupparentdivs").each(function() {
						var count = $(this).find(".myyourclass").length;
						if(count<=0) {
							$(this).hide();
						}
					});
					//$(".subgroupparentdivs_"+gotattributemaingrpid).each(function() {
					
				}
				
			}
			else {
				  $('.subgroupparentdivs').show();  
				  $('.commonClass').show();  
			}
		}
                function ShowUnVerifiedAtt() {
                    var projectid = $('#ProjectId').val();
                    var regionid = $('#RegionId').val();
                    var inputentityid = $('#InputEntityId').val();
                    var prodentityid = $('#ProductionEntity').val();
                    var sequence = $('#seq').val();
                    var unverified = $("#chk-wid-Url2").prop("checked");
                    var subgroup='<?php echo json_encode($AttributeSubGroupMasterJSON); ?>';       
                    var subgrpArr=JSON.parse(subgroup);
                    var distinct='<?php echo json_encode($distinct)?>';
                    var distinctArr=JSON.parse(distinct);
                    //alert(distinct);
                    obj=[];i=0;objAttr=[];j=0;objshowAttr=[];k=0;
                    var sat = $("#chk-wid-Url").prop("checked");
                   
                        if(sat) {
                                $('.myyourclass').find('.dispositionSelect').each(function() {
                                    
                                var selectedId=$(this).attr('id')
                                
                                var selected = $('#'+selectedId).find(":selected").text();
                                var selectedIdArr=selectedId.split('_');
                                var distMatch=jQuery.inArray( selectedIdArr[1], distinctArr )
                                if(distMatch==-1)
                                {
                                  if (selected != "--") {
                                     objAttr[j]=selectedIdArr[2];
                                     j++;
                                    }
                                    else {
                                        objshowAttr[k]=selectedIdArr[2];
                                        k++;
                                    }
                                }
                                else{
                                    if (selected == "--") {
                                        obj[i]=selectedIdArr[1];
                                        i++;
                                    }
                                }
                                }); 
                            
                            }
                            else {
                               $('.dispositionSelect').each(function() {
                                var selectedId=$(this).attr('id')
                               // alert(selectedId);
                                var selected = $('#'+selectedId).find(":selected").text();
                                var selectedIdArr=selectedId.split('_');
                                var distMatch=jQuery.inArray( selectedIdArr[1], distinctArr )
                                if(distMatch==-1)
                                {
                                  if (selected != "--") {
                                     objAttr[j]=selectedIdArr[2];
                                     j++;
                                    }
                                    else {
                                        objshowAttr[k]=selectedIdArr[2];
                                        k++;
                                    }
                                }
                                else{
                                    if (selected == "--") {
                                        obj[i]=selectedIdArr[1];
                                        i++;
                                    }
                                }
                                }); 
                            }
                          
                                $.unique(obj);
                                $.unique(objAttr);
                                  //alert(JSON.stringify(obj));
                                   if(unverified){
                                $.each( subgrpArr, function( key, value ) {
                                    $.each( value, function( key2, value2 ) {
                                        var keyMatch=jQuery.inArray( key2, obj )
                                        var distMatch3=jQuery.inArray( key2, distinctArr )
                                        if(distMatch3!=-1) {
                                       
                                        if(keyMatch==-1 )
                                           {
                                             $( "#MultiSubGroup_" + key2 + "_" + 1).css("display", "none");
                                             $( "#MultiSubGroup_" + key2 + "_" + 1).removeClass("showFilled");
                                            }
                                            else{
                                                    $( "#MultiSubGroup_" + key2 + "_" + 1).css("display", "block");
                                                     $( "#MultiSubGroup_" + key2 + "_" + 1).addClass("showFilled");
                                                }
                                                
                                            }
                                            });
                                        });
                                        
                                        
                                 $.each(objAttr,function(key,value){
                                        $( "#MultiField_" + value + "_" + 1).css("display", "none");
                                             $( "#MultiField_" + value + "_" + 1).removeClass("showFilled");
                                        }
                                 );       
                                $.each(objshowAttr,function(key,value){
                                        $( "#MultiField_" + value + "_" + 1).css("display", "block");
                                             $( "#MultiField_" + value + "_" + 1).addClass("showFilled");
                                        }
                                 );
                                   
                                $(".subgroupparentdivs").each(function() {
                                    var count = $(this).find(".showFilled").length;
                                    if(count<=0) {
    					$(this).hide();
                                    }
                                    else {
                                        $(this).show();
                                    }
                                    });
                            }
                            else {
                                    $.each( subgrpArr, function( key, value ) {
                                    $.each( value, function( key2, value2 ) {
                                        $( "#MultiSubGroup_" + key2 + "_" + 1).css("display", "block");
                                        $( "#MultiSubGroup_" + key2 + "_" + 1).addClass("showFilled");
                                     });
                                    }); 
                                    $(".subgroupparentdivs").each(function() {
                                        $(this).css("display", "block");
                                        });
                                    
                                    if(sat)  {
                                            $(".subgroupparentdivs").each(function() {
                                        var count = $(this).find(".myyourclass").length;
                                        if(count<=0) {
                                        $(this).hide();
                                        }
                                        });
                                    }
                                    
                                    $.each(objAttr,function(key,value){
                                        $( "#MultiField_" + value + "_" + 1).css("display", "block");
                                             $( "#MultiField_" + value + "_" + 1).addClass("showFilled");
                                        }
                                        );
                            }
                }
            function addReferenceUrl() {
            $('#addnewurl').show();
            $('#addurl').val('');

        }

        function loadReferenceUrl() {
            
            
            $('#addnewurl').hide();
            $('.chk-wid-Url').parent().show();
            var projectid = $('#ProjectId').val();
            var regionid = $('#RegionId').val();
            var inputentityid = $('#InputEntityId').val();
            var prodentityid = $('#ProductionEntity').val();

             var attrGrpid = $('#attrGroupId').val();
                var attrSubGrpid = $('#attrSubGroupId').val();
                var attrid = $('#attrId').val();
                var Projattrid = $('#ProjattrId').val();
                var sequence = $('#seq').val();
            
            $.ajax({
                type: "POST",
                url: "<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'ajaxgetgroupurl')); ?>",
                data: ({ProjectId: projectid, RegionId: regionid, InputEntityId: inputentityid, ProdEntityId: prodentityid, AttrGroup: attrGrpid, AttrSubGroup: attrSubGrpid, AttrId: attrid, ProjAttrId: Projattrid, seq: sequence}),
                dataType: 'text',
                async: true,
                success: function (result) {
                    $("#LoadGroupAttrValue").empty();
                    if (result != '' && result != null) {
                        $("#LoadGroupAttrValue").empty();
                        var obj = JSON.parse(result);
                        if (obj['attrval'] != '' && obj['attrval'] != null) {
                            obj['attrval'].forEach(function (element) {
                                if (element['AttributeValue'] != '' && element['AttributeValue'] != null) {
                                    var cols = "";
                                    cols += '<div class="col-xs-12 col-xl-4">';
                                    cols += '<div class="srcblock box1 update-cart" id="demo" data-dismiss="modal">';
//                                    if (element['HtmlFileName'] != '' && element['HtmlFileName'] != null) {
//                                        var htmlfile = element['HtmlFileName'];
//                                        cols += '<span class="badge CntBadge" style="display: inline-block;">' + element['attrcnt'] + '</span> <a href="#" title=' + element['AttributeValue'] + ' value="' + htmlfile + '" id="' + htmlfile + '" onclick="loadPDF(this.id,0);"  class="current text-center text update-cart info_link">' + element['AttributeValue'].substring(0, 45) + '</a>';
//                                    } else if (element['AttributeValue'] != '' && element['AttributeValue'] != null) {
                                        cols += '<span class="badge CntBadge" style="display: inline-block;">' + element['attrcnt'] + '</span> <a href="#" title=' + element['AttributeValue'] + ' value=' + element['AttributeValue'] + ' id=' + element['AttributeValue'] + ' onclick="loadPDFUrl(this.id);" class="current text-center text">' + element['AttributeValue'].substring(0, 45) + '</a>';
                                  //  }
                                    cols += '</div>';
                                    cols += '</div>';
                                    $("#LoadGroupAttrValue").append(cols);
                                } else {
                                    var colsEmpty = "";
                                    colsEmpty += "No URL found";
                                    $("#LoadGroupAttrValue").append(colsEmpty);
                                }
                            });
                        } else {
                            var colsEmpty = "";
                            colsEmpty += "No URL found";
                            $("#LoadGroupAttrValue").append(colsEmpty);
                        }
                    } else {
                        var colsEmpty = "";
                        colsEmpty += "No URL found";
                        $("#LoadGroupAttrValue").append(colsEmpty);
                    }
                }
            });
        }

//        function multipleUrl() {
//            $('#addnewurl').hide();
//        }
        //  Query posting
        function valicateQuery() {
            if ($("#query").val() == '')
            {
                alert('Enter Query');
                $("#query").focus();
                return false;
            }
            var regionid = $('#RegionId').val();
            query = $("#query").val();
            InputEntyId = $("#ProductionEntity").val();

            var result = new Array();
            $.ajax({
                type: "POST",
                url: "<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'ajaxqueryposing')); ?>",
                data: ({query: query, InputEntyId: InputEntyId, RegionId: regionid}),
                dataType: 'text',
                async: false,
                success: function (result) {
                    document.getElementById('successMessage').style.display = 'block';
                    setTimeout(function () {
                        $(".formsubmit_validation_endisable").show(); // code added 
                        document.getElementById('successMessage').style.display = 'none';
                        $("#query").val(result);
                    }, 2000);
                }
            });
        }

        // load next attribute
        function loadMultiField(action, attributeMasterId, totalseq) {
            var currentSeq = $(".ShowingSeqDiv_" + attributeMasterId + "").val();
            var nex = parseInt(currentSeq) + 1;
            var prev = parseInt(currentSeq) - 1;

            if (action == 'next' && totalseq >= nex) {
                //$(".MultiField_" + attributeMasterId).hide();
                $("#MultiField_" + attributeMasterId + "_" + currentSeq).hide();
                $("#MultiField_" + attributeMasterId + "_" + nex).show();
                $(".ShowingSeqDiv_" + attributeMasterId + "").val(nex);
            }

            if (action == 'previous' && totalseq >= prev && prev > 0) {
                //$(".MultiField_" + attributeMasterId).hide();
                $("#MultiField_" + attributeMasterId + "_" + currentSeq).hide();
                $("#MultiField_" + attributeMasterId + "_" + prev).show();
                $(".ShowingSeqDiv_" + attributeMasterId + "").val(prev);
            }
        }
        function Paginate(action, subgrp, totalseq) {
            var currentSeq = $(".GroupSeq_" + subgrp + "").val();
            var nex = parseInt(currentSeq) + 1;
            var prev = parseInt(currentSeq) - 1;




            //tot =3
            //current 1
            //prev 0
            //next 2
            if (currentSeq == totalseq)
                $('#next_' + subgrp).css('color', 'grey');
            else
                $('#next_' + subgrp).css('color', '#4397e6');

            if (currentSeq == 1)
                $('#previous_' + subgrp).css('color', 'grey');
            else
                $('#previous_' + subgrp).css('color', '#4397e6');

            if (action == 'next' && totalseq >= nex) {


                // alert(nex+'nex');
                $("#MultiSubGroup_" + subgrp + "_" + currentSeq).hide();
                $("#MultiSubGroup_" + subgrp + "_" + nex).show();
                $(".GroupSeq_" + subgrp + "").val(nex);
                if (nex == totalseq)
                    $('#next_' + subgrp).css('color', 'grey');
                else
                    $('#next_' + subgrp).css('color', '#4397e6');
                if (nex == 1)
                    $('#previous_' + subgrp).css('color', 'grey');
                else
                    $('#previous_' + subgrp).css('color', '#4397e6');


            }

            if (action == 'previous' && totalseq >= prev && prev > 0) {

                $("#MultiSubGroup_" + subgrp + "_" + currentSeq).hide();
                $("#MultiSubGroup_" + subgrp + "_" + prev).show();
                $(".GroupSeq_" + subgrp + "").val(prev);

                if (prev == totalseq)
                    $('#next_' + subgrp).css('color', 'grey');
                else
                    $('#next_' + subgrp).css('color', '#4397e6');

                if (prev == 1)
                    $('#previous_' + subgrp).css('color', 'grey');
                else
                    $('#previous_' + subgrp).css('color', '#4397e6');
            }
              currentSeq = $(".GroupSeq_" + subgrp + "").val();
            checkAllUrlAttPaginate(subgrp,currentSeq);
            
        }

        function formSubmit() {
<?php /* if(isset($Mandatory)) {
  $js_array = json_encode($Mandatory);
  echo "var mandatoryArr = ". $js_array . ";\n";
  } */ ?>
            /*var mandatary = 0;
             if (typeof mandatoryArr != 'undefined') {
             $.each(mandatoryArr, function (key, elementArr) {
             element = elementArr['AttributeMasterId']
             
             if ($('#' + element).val() == '') {
             // alert(($('#' + element).val()));
             alert('Enter Value in ' + elementArr['DisplayAttributeName']);
             $('#' + element).focus();
             mandatary = '1';
             return false;
             }
             });
             }
             if (mandatary == 0) {
             AjaxSave('');
             return true;
             } else {
             return false;
             }*/
			 
			 
               
                    
			 
			var ret = true;
            ret = AjaxSave('');
			$(".removeinputclass").remove();
                       
            return ret;
        }
		
		function skipformSubmit() {
			var ret = true;
			$(".removeinputclass").remove();
            return ret;
        }
		
        function AjaxSave(addnewpagesave) {
            Updatedata = $(".UpdateFields").serialize();
            Inputdata = $(".InsertFields").serialize();
            ProjectId = $("#ProjectId").val();
            RegionId = $("#RegionId").val();
            ProductionEntityID = $("#ProductionEntityID").val();
            InputEntityId = $("#InputEntityId").val();
            $("#save_btn").html("Please wait! Saving...");
            //$("#save_btn").attr("disabled", "disabled");
            
            $.ajax({
                type: "POST",
                url: "<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'ajaxsave')); ?>",
                data: ({Updatedata: Updatedata, Inputdata: Inputdata, ProjectId: ProjectId, RegionId: RegionId, ProductionEntityID: ProductionEntityID, InputEntityId: InputEntityId}),
                dataType: 'json',
                async: false,
                success: function (result) {
                    //alert(result);
                    if (result == 'saved') {
                        //alert('Save successfully!');
                    } else {
                        alert('Error while saving data, please try again later.');
                    }
                    $("#save_btn").removeAttr("disabled");
                    $("#save_btn").html("Save");
                    $(".InsertFields").addClass("UpdateFields").removeClass("InsertFields");
					return true;
                }
            });
            localStorage.clear();
			return true;
        }

           

    </script>
</body>
<?php //exit; ?>
<div id="fade" class="black_overlay"></div>
    <?php
    echo $this->Form->end();
}
?>
<script>
    var hms = '<?php echo $hrms[0]; ?>';   // your input string
    if (hms != '') {
        var a = hms.split(':'); // split it at the colons
        var seconds = (+a[0]) * 60 * 60 + (+a[1]) * 60 + (+a[2]);
    } else {
        var seconds = 0;
    }
//    function LoadPDF(file)
//    {
//        document.getElementById('frame').src = file;
//        $("body", myWindow.document).find('#pdfframe').attr('src', file);
//    }
    function secondPassed() {
        var hour = Math.round((Math.round((seconds - 30) / 60) - 30) / 60);
        var temp = hour * 60 * 60;
        var minutes = Math.round(((seconds - temp) - 30) / 60);
        var remainingSeconds = seconds % 60;
        if (remainingSeconds < 10) {
            remainingSeconds = "0" + remainingSeconds;
        }
        if (minutes < 10) {
            minutes = "0" + minutes;
        }

        if (hour < 10) {
            hour = "0" + hour;
        }
        document.getElementById('countdown').innerHTML = hour + ":" + minutes + ":" + remainingSeconds;
        document.getElementById('TimeTaken').value = hour + ":" + minutes + ":" + remainingSeconds;
        seconds++;
    }
    var countdownTimer = setInterval('secondPassed()', 1000);

</script>


<script>
    function Load_totalAttInThisGrpCnt() {
        $('.CampaignWiseMainDiv').each(function (i, obj) {
            var mainGrpId = $(this).attr("data");
            var count = $('.CampaignWiseFieldsDiv_' + mainGrpId).length;
            var countDone = $('.CampaignWiseSelDone_' + mainGrpId).filter(function () {
                if ($(this).val() != "")
                    return $(this).val();
            }).length;
            $('#totalAttInThisGrpCnt_' + mainGrpId).html(count);
            $('#currentADMVDoneCnt_' + mainGrpId).html(countDone);
        });
    }

   function Load_verifiedAttrCnt(thisObj) {
        
        var closestDisVal = thisObj.parent().parent().parent().find(".dispositionSelect").val();
        //if(closestDisVal=="") {
       // var thisinpuval = thisObj.val().toLowerCase();
        var ElementType=thisObj.is(':radio');
        //alert(ElementType);
        
        if(thisObj.is(':radio')){
             var thisinpuval =   thisObj.filter(':checked').val();
             if(typeof thisinpuval=='undefined')
                 thisinpuval='';
        }
        
        else
		var thisinpuval = thisObj.val();
            
           
       // var spaninpuval = thisObj.parent().find('.lighttext').text().toLowerCase();
		var spaninpuval = thisObj.parent().find('.lighttext').text();

//alert(thisinpuval+'-'+spaninpuval);
        if (spaninpuval === thisinpuval && spaninpuval != "") {
            thisObj.parent().parent().parent().find(".dispositionSelect").val('V');
        }

        if (spaninpuval != thisinpuval && spaninpuval != "" && thisinpuval != "") {
            thisObj.parent().parent().parent().find(".dispositionSelect").val('M');
        }

        if (spaninpuval != thisinpuval && spaninpuval == "" && thisinpuval != "" ) {
            thisObj.parent().parent().parent().find(".dispositionSelect").val('A');
        }
		
	if (spaninpuval != thisinpuval && spaninpuval != "" && thisinpuval == "") {
            thisObj.parent().parent().parent().find(".dispositionSelect").val('D');
        }
            
        if (spaninpuval == "" && thisinpuval == "") {
            thisObj.parent().parent().parent().parent().find(".dispositionSelect").val('');
        }
        //}
    }
    
    function Load_verifiedAttrCnt_forselect(thisObj) {
        var closestDisVal = thisObj.parent().parent().parent().parent().find(".dispositionSelect").val();
        var thisinpuval = thisObj.val();
         
        if(thisinpuval != null){
        var thisinpuval = thisObj.val().join(',');
       
   }
   else{
       var thisinpuval = thisObj.val();
   }
  
       // var spaninpuval = thisObj.parent().find('.lighttext').text().toLowerCase();
		var spaninpuval = thisObj.parent().next('.lighttext').text();
        if (spaninpuval === thisinpuval && spaninpuval != "") {
            thisObj.parent().parent().parent().parent().find(".dispositionSelect").val('V');
        }

        if (spaninpuval != thisinpuval && spaninpuval != "" && thisinpuval != "") {
            thisObj.parent().parent().parent().parent().find(".dispositionSelect").val('M');
        }

        if (spaninpuval != thisinpuval && spaninpuval == "" && thisinpuval != "" ) {
            thisObj.parent().parent().parent().parent().find(".dispositionSelect").val('A');
        }
		
		if (spaninpuval != thisinpuval && spaninpuval != "" && (thisinpuval == "" || thisinpuval == null)) {
            thisObj.parent().parent().parent().parent().find(".dispositionSelect").val('D');
        }
  if (spaninpuval == "" && (thisinpuval == "" || thisinpuval == null)) {
            thisObj.parent().parent().parent().parent().find(".dispositionSelect").val('');
        }
    }

    function getJob()
    {
        window.location.href = "Getjobcore?job=newjob";
    }
    

    $(document).ready(function () {
		
		$('input[type="text"].form-control').keypress(function(){
			$(this).removeClass('text-danger');
		});
		
		$('input[type="text"].form-control').change(function(){
			$(this).removeClass('text-danger');
		});
		
        Load_totalAttInThisGrpCnt();

        $(document).on("blur", ".doOnBlur", function (e) {
            AttValue = $(this).val();
                    Attname=$(this).attr("name");
                  
                    localStorage.setItem(Attname, AttValue);
			//alert('dfdf');
            Load_verifiedAttrCnt($(this));
            Load_totalAttInThisGrpCnt();
        });

        $(document).on("change", ".dispositionSelect", function (e) {
            AttValue = $(this).val();
                    Attname=$(this).attr("name");
                  
                    localStorage.setItem(Attname, AttValue);
            Load_totalAttInThisGrpCnt();
        });

        $(document).on("click", ".remove-field", function (e) {
            var atributeId = $(this).attr("data");
            var maxSeqCnt = $('.ShowingSeqDiv_' + atributeId).attr("data");
            var nxtSeq = parseInt(maxSeqCnt);
            $( "#MultiField_"+atributeId+"_"+maxSeqCnt ).remove();
           // $(this).parent().remove();
            Load_totalAttInThisGrpCnt();

            var nxtSeq = nxtSeq - 1;
            $('.ShowingSeqDiv_' + atributeId).attr("data", nxtSeq);
        });
        $(document).on("click", ".removeGroup-field", function (e) {
            var groupId = $(this).attr("data");

            var maxSeqCnt = $('.GroupSeq_' + groupId).attr("data");
            var nxtSeq = parseInt(maxSeqCnt);


            
            $(this).parent().remove();
            Load_totalAttInThisGrpCnt();

            var nxtSeq = nxtSeq - 1;



            $('.GroupSeq_' + groupId).attr("data", nxtSeq);
        });
        
        $('.addAttribute').on('click', function () {
         
        
            var a = [];
            
            if(localStorage.getItem('attradd')!=null)
            a =JSON.parse(localStorage.getItem('attradd'));
            var localStore = {'data':$(this).attr("data"),'ProjAttributeId':$(this).attr("data-ProjAttrId"),'groupId':$(this).attr("data-groupId"),'subgrpId':$(this).attr("date-subgrpId"),'groupName':$(this).attr("data-groupName")};
            a.push(localStore);
            localStorage.setItem('attradd', JSON.stringify(a));
            
            
            var atributeId = $(this).attr("data");
            var ProjAttributeId = $(this).attr("data-ProjAttrId");
            var groupId = $(this).attr("data-groupId");
            var subgrpId = $(this).attr("date-subgrpId");
            
             var selectedText = $('#subgrp_' + groupId + '_'+subgrpId).find("option:selected").text();

        var groupName = $(this).attr("data-groupName");
            var maxSeqCnt = $('.ShowingSeqDiv_' + atributeId).attr("data");
            var nxtSeq = parseInt(maxSeqCnt) + 1;
            var subGrpArr='<?php echo str_replace("'", "\\'", json_encode($AttributesListGroupWise))?>';
            var subGrpAtt = JSON.parse(subGrpArr);
            //var subGrpArrValidate='<?php //echo str_replace("'", "\\'", json_encode($validate))?>';
            var subGrpArrValidate='<?php echo stripslashes(json_encode($validate))?>';
            var subGrpAttValidate = JSON.parse(subGrpArrValidate);
            var elementValidate = subGrpAttValidate[ProjAttributeId];
            
            var subGrpAttArr = subGrpAtt[groupId][subgrpId];
           element=[];
             $.each(subGrpAttArr, function (key, val) {
                 if(val['AttributeMasterId']==atributeId){
                     element=val;
                 }
             });
             var inpId = 'ProductionFields_' + atributeId + '_<?php echo $DependentMasterIds['ProductionField']; ?>_' + nxtSeq;
            var inpName = 'ProductionFields_' + atributeId + '_<?php echo $DependentMasterIds['ProductionField']; ?>_' + nxtSeq;
            var commendName = 'ProductionFields_' + atributeId + '_<?php echo $DependentMasterIds['Comments']; ?>_' + nxtSeq;
            var selName = 'ProductionFields_' + atributeId + '_<?php echo $DependentMasterIds['Disposition']; ?>_' + nxtSeq;
            var prodDep='<?php echo $DependentMasterIds['ProductionField']; ?>';
            var cmdDep='<?php echo $DependentMasterIds['Comments']; ?>';
            var disDep='<?php echo $DependentMasterIds['Disposition']; ?>';
             maxSeq='<?php echo json_encode($maxSeq);?>';
            maxSeqArr=JSON.parse(maxSeq);
            if(nxtSeq<=maxSeqArr[prodDep])
                var dbClass='UpdateFields';
            else
                var dbClass='InsertFields';
            if(nxtSeq<=maxSeqArr[cmdDep]) 
                var dbClass_cmd='UpdateFields';
            else
                var dbClass_cmd='InsertFields';
            
            if(nxtSeq<=maxSeqArr[disDep]) 
                var dbClass_dis='UpdateFields';
            else
                var dbClass_dis='InsertFields';
            
            //alert(nxtSeq);
            var toappendData = '<div id="MultiField_' + atributeId + '_' + nxtSeq + '" style="border-bottom: 1px dotted rgb(196, 196, 196) !important" class="row form-responsive MultiField_' + atributeId + ' CampaignWiseFieldsDiv_' + groupId + '">' +
                    '<div class="col-md-3 form-title"><div class="form-group" style=""><p>' + groupName + '</p></div></div>' +
                    '<div class="col-md-4 form-text"><div class="form-group">' ;
					
		var pam = element['ProjectAttributeMasterId'];
                var reload = 'LoadValue('+pam+',this.value,'+elementValidate['Reload']+','+ atributeId +','+'<?php echo $DependentMasterIds['ProductionField']; ?>'+','+ nxtSeq +');';
                                         //var reload = elementValidate['Reload'] +','+ atributeId +','+'<?php echo $DependentMasterIds['ProductionField']; ?>'+','+ nxtSeq +');';
                                        var IsMandatory=elementValidate['IsMandatory'];
                                        var DisplayAttributeName=elementValidate['DisplayAttributeName'];
                                        var mandateFunction ='';
                                         if(IsMandatory==1){
                                         var mandateFunction = 'MandatoryValue(this.id,this.value,'+'\''+DisplayAttributeName+'\');';
                                         }
                                          else{
                                          var mandateFunction =''; 
                                         }
                             var inpOnBlur ='';
                             elementValidate['AllowedCharacter'] = addslashes(elementValidate['AllowedCharacter']);
                             elementValidate['NotAllowedCharacter'] = addslashes(elementValidate['NotAllowedCharacter']);
                     if(elementValidate['ControlName']=='TextBox'){
                         inpOnBlur =' onblur="checkLength(this,'+atributeId+','+'<?php echo $DependentMasterIds['ProductionField']; ?>'+','+nxtSeq+','+elementValidate['MinLength']+'); '+mandateFunction+elementValidate['FunctionName']+'(this.id, this.value,'+'\''+elementValidate['AllowedCharacter'] + '\', '+'\''+elementValidate['NotAllowedCharacter']+'\', '+'\''+elementValidate['Dateformat']+'\', '+'\''+elementValidate['AllowedDecimalPoint']+'\');" maxlength="'+elementValidate['MaxLength']+'" minlength="'+elementValidate['MinLength']+'"';   
                     }else if(elementValidate['ControlName']=='DropDownList'){
                         inpOnBlur =' onblur="'+mandateFunction+elementValidate['FunctionName']+'(this.id, this.value,'+'\''+elementValidate['AllowedCharacter'] + '\', '+'\''+elementValidate['NotAllowedCharacter']+'\', '+'\''+elementValidate['Dateformat']+'\', '+'\''+elementValidate['AllowedDecimalPoint']+'\');"';   
                     }
                        //alert(inpOnBlur);
                        //onblur="NumbersOnly(this.id, this.value,'', '', '', 'null');" maxlength="null" minlength="null"
                    if(element['ControlName']=='TextBox')
                        toappendData +='<input '+inpOnBlur+' type="text" class="inputsubGrp_'+groupId+'_'+subgrpId+' wid-100per form-control doOnBlur '+dbClass+'" id="' + inpId + '"  name="' + inpName + '" onclick="getThisId(this);loadWebpage('+atributeId+', '+pam+', '+groupId+', '+subgrpId+', '+nxtSeq+', 0);">' ;
                    if(element['ControlName']=='MultiTextBox') {
                    toappendData += '<textarea id=COpyTeXt_' + atributeId + '_' + nxtSeq + ' readonly="readonly" class="inputsubGrp_'+groupId+'_'+subgrpId+' wid-100per form-control"></textarea>';
                    if(element['Options'] != ''){
                        var inpName = 'ProductionField_' + atributeId + '_<?php echo $DependentMasterIds['ProductionField']; ?>_' + nxtSeq+'[]';
                        toappendData +='<select multiple="true" '+inpOnBlur+' class="inputsubGrp_'+groupId+'_'+subgrpId+' wid-100per testmulti doOnBlur UpdateFields removeinputclass"  id="' + inpId + '" name="' + inpName + '" >';

                    jQuery.each(element['Options'], function (i, val) {
                        toappendData +='<option value="'+val+'">'+val+'</option>';
                    });
                    toappendData +='</select>';
                    } else {
                        toappendData +='<textarea '+inpOnBlur+' class="inputsubGrp_'+groupId+'_'+subgrpId+' wid-100per form-control doOnBlur '+dbClass+'" id="' + inpId + '" name="' + inpName + '" onclick="getThisId(this);loadWebpage('+atributeId+', '+pam+', '+groupId+', '+subgrpId+', '+nxtSeq+', 0);"></textarea>' ;
                    }
                }
                if(element['ControlName']=='CheckBox')
                        toappendData +='<input '+inpOnBlur+' type="checkbox" class="inputsubGrp_'+groupId+'_'+subgrpId+' doOnBlur '+dbClass+'" id="' + inpId + '" name="' + inpName + '"  onclick="getThisId(this);loadWebpage('+atributeId+', '+pam+', '+groupId+', '+subgrpId+', '+nxtSeq+', 0);">' ;  
                if(element['ControlName']=='RadioButton'){
                        toappendData +='<input value="Yes" type="radio" style="position:static" class="inputsubGrp_'+groupId+'_'+subgrpId+' doOnBlur '+dbClass+'" id="' + inpId + '" name="' + inpName + '" onclick="getThisId(this);loadWebpage('+atributeId+', '+pam+', '+groupId+', '+subgrpId+', '+nxtSeq+', 0);"> Yes '+
                                        '<input value="No" type="radio" style="position:static" class="inputsubGrp_'+groupId+'_'+subgrpId+' doOnBlur '+dbClass+'" id="' + inpId + '" name="' + inpName + '" onclick="getThisId(this);loadWebpage('+atributeId+', '+pam+', '+groupId+', '+subgrpId+', '+nxtSeq+', 0);"> No ' ;  
                            }
                   if(element['ControlName']=='DropDownList') {
                        toappendData +='<select '+inpOnBlur+' onchange = '+reload+' class="inputsubGrp_'+groupId+'_'+subgrpId+' wid-100per form-control doOnBlur '+dbClass+'"  id="' + inpId + '" name="' + inpName + '" onclick="getThisId(this);loadWebpage('+atributeId+', '+pam+', '+groupId+', '+subgrpId+', '+nxtSeq+', 0);"><option value="">--Select--</option>';
                       
                      jQuery.each(element['Options'], function (i, val) {
                          toappendData +='<option value="'+val+'">'+val+'</option>';
                      });
                      toappendData +='</select>';
                  }
            toappendData +='<span class="lighttext" data-toggle="tooltip" title=""></span>' +
                    '</div></div>' +
                    '<div class="col-md-2 form-text"><div class="form-group comments">' +
                    '<textarea rows="1" cols="50" class="form-control '+dbClass_cmd+'" id="" name="' + commendName + '" placeholder="Comments"></textarea>' +
                    '</div></div>' + 
                    '<div class="col-md-3 form-status"><div class="form-group status">' +
                    '<select id="" name="' + selName + '" class="form-control CampaignWiseSelDone_' + groupId + ' subGrpDisp_'+groupId+'_'+subgrpId+' dispositionSelect '+dbClass_dis+'">' +
                    '<option value="">--</option>' +
                    '<option value="A">A</option>' +
                    '<option value="D">D</option>' +
                    '<option value="M">M</option>' +
                    '<option value="V">V</option>' +
                    '</select>' +
                    '<div><i class="fa fa-minus-circle remove-field m-r-10" style="padding:5px;" data="' + atributeId + '"></i></div></div>' +
                    '</div></div>';
            
          
            $('.add_' + atributeId).append(toappendData);
            $('.ShowingSeqDiv_' + atributeId).attr("data", nxtSeq);

            Load_totalAttInThisGrpCnt();
                    $('.testmulti').fSelect();
            // checkAll(groupId,subgrpId);
                });

        $('.addSubgrpAttribute').on('click', function () {
            //alert('coming');
             var a = [];
            
            if(localStorage.getItem('attrgrp')!=null)
            a =JSON.parse(localStorage.getItem('attrgrp'));
            var localStore = {'subgrpId':$(this).attr("data"),'groupId':$(this).attr("data-groupId")};
            a.push(localStore);
            localStorage.setItem('attrgrp', JSON.stringify(a));
            
            var subgrpId = $(this).attr("data");
            
            var groupId = $(this).attr("data-groupId");
            //alert('<?php //echo json_encode($AttributesListGroupWise); ?>');
            var subGrpArr='<?php echo str_replace("'", "\\'", json_encode($AttributesListGroupWise))?>';
            var subGrpAtt = JSON.parse(subGrpArr);
            
            //var subGrpArrValidate='<?php echo str_replace("'", "\\'", json_encode($validate))?>';
            var subGrpArrValidate='<?php echo stripslashes(json_encode($validate))?>';
            var subGrpAttValidate = JSON.parse(subGrpArrValidate);
            
            var subGrpAttArr = subGrpAtt[groupId][subgrpId];
            var groupName = 'Organization Status';

            var maxSeqCnt = $('.GroupSeq_' + subgrpId).attr("data");
            maxSeq='<?php echo json_encode($maxSeq);?>';
            maxSeqArr=JSON.parse(maxSeq);
            
            //maxSeqCnt=1;
            var nxtSeq = parseInt(maxSeqCnt) + 1;
            
            var prodDep='<?php echo $DependentMasterIds['ProductionField']; ?>';
            var cmdDep='<?php echo $DependentMasterIds['Comments']; ?>';
            var disDep='<?php echo $DependentMasterIds['Disposition']; ?>';
            if(nxtSeq<=maxSeqArr[prodDep])
                var dbClass='UpdateFields';
            else
                var dbClass='InsertFields';
            if(nxtSeq<=maxSeqArr[cmdDep]) 
                var dbClass_cmd='UpdateFields';
            else
                var dbClass_cmd='InsertFields';
            
            if(nxtSeq<=maxSeqArr[disDep]) 
                var dbClass_dis='UpdateFields';
            else
                var dbClass_dis='InsertFields';
            
            
            toappendData = '<div ><font style="color:#62A8EA">Page : <b>' + nxtSeq + '</b></font><i class="fa fa-minus-circle removeGroup-field pull-right" data="' + subgrpId + '" style="top:0px"></i><br>';
            $.each(subGrpAttArr, function (key, element) {
                //alert (JSON.stringify(element));
                atributeId = element['AttributeMasterId'];
                ProjAttributeId = element['ProjectAttributeMasterId'];
                var elementValidate = subGrpAttValidate[ProjAttributeId];
                 var inpId = 'ProductionFields_' + atributeId + '_<?php echo $DependentMasterIds['ProductionField']; ?>_' + nxtSeq;
                var inpName = 'ProductionFields_' + atributeId + '_<?php echo $DependentMasterIds['ProductionField']; ?>_' + nxtSeq;
                var commendName = 'ProductionFields_' + atributeId + '_<?php echo $DependentMasterIds['Comments']; ?>_' + nxtSeq;
                var selName = 'ProductionFields_' + atributeId + '_<?php echo $DependentMasterIds['Disposition']; ?>_' + nxtSeq;
                
                
                //alert(inpName);
				
				var pam = element['ProjectAttributeMasterId'];
                                var reload = 'LoadValue('+pam+',this.value,'+elementValidate['Reload']+','+ atributeId +','+'<?php echo $DependentMasterIds['ProductionField']; ?>'+','+ nxtSeq +');';
				//  var reload = elementValidate['Reload'] +','+ atributeId +','+'<?php echo $DependentMasterIds['ProductionField']; ?>' +','+ nxtSeq +');';
                                var IsMandatory=elementValidate['IsMandatory'];
                                        var DisplayAttributeName=elementValidate['DisplayAttributeName'];
                                        var mandateFunction ='';
                                         if(IsMandatory==1){
                                         var mandateFunction = 'MandatoryValue(this.id,this.value,'+'\''+DisplayAttributeName+'\');';
                                         }
                                          else{
                                          var mandateFunction =''; 
                                         }
                             var inpOnBlur ='';           
                             elementValidate['AllowedCharacter'] = addslashes(elementValidate['AllowedCharacter']);
                             elementValidate['NotAllowedCharacter'] = addslashes(elementValidate['NotAllowedCharacter']);
                     if(elementValidate['ControlName']=='TextBox'){
                         inpOnBlur =' onblur="checkLength(this,'+atributeId+','+'<?php echo $DependentMasterIds['ProductionField']; ?>'+','+nxtSeq+','+elementValidate['MinLength']+'); '+mandateFunction+elementValidate['FunctionName']+'(this.id, this.value,'+'\''+elementValidate['AllowedCharacter'] + '\', '+'\''+elementValidate['NotAllowedCharacter']+'\', '+'\''+elementValidate['Dateformat']+'\', '+'\''+elementValidate['AllowedDecimalPoint']+'\');" maxlength="'+elementValidate['MaxLength']+'" minlength="'+elementValidate['MinLength']+'"';   
                     }else if(elementValidate['ControlName']=='DropDownList'){
                         inpOnBlur =' onblur="'+mandateFunction+elementValidate['FunctionName']+'(this.id, this.value,'+'\''+elementValidate['AllowedCharacter'] + '\', '+'\''+elementValidate['NotAllowedCharacter']+'\', '+'\''+elementValidate['Dateformat']+'\', '+'\''+elementValidate['AllowedDecimalPoint']+'\');"';   
                     }
				
                toappendData += '<div id="MultiField_' + atributeId + '_' + nxtSeq + '" style="border-bottom: 1px dotted rgb(196, 196, 196) !important"  class=" row form-responsive clearfix MultiField_' + atributeId + ' CampaignWiseFieldsDiv_' + groupId + '">' +
                        '<div class="col-md-3 form-title"><div class="form-group" style=""><p>' + element['DisplayAttributeName'] + '</p></div></div>' +
                        '<div class="col-md-4 form-text"><div class="form-group">' ;
                if(element['ControlName']=='TextBox')
                        toappendData +='<input '+inpOnBlur+' type="text" class="inputsubGrp_'+groupId+'_'+subgrpId+' wid-100per form-control doOnBlur '+dbClass+'" id="' + inpId + '" name="' + inpName + '" onclick="getThisId(this);loadWebpage('+atributeId+', '+pam+', '+groupId+', '+subgrpId+', '+nxtSeq+', 0);">' ;

//-------->>>>>>>>>>>> Onclick MultiText Box <<<<<<<<<<<-----------
		if(element['ControlName']=='MultiTextBox') {
                    toappendData += '<textarea id=COpyTeXt_' + atributeId + '_' + nxtSeq + ' readonly="readonly" class="inputsubGrp_'+groupId+'_'+subgrpId+' wid-100per form-control"></textarea>';
                    if(element['Options'] != ''){
                        var inpName = 'ProductionField_' + atributeId + '_<?php echo $DependentMasterIds['ProductionField']; ?>_' + nxtSeq+'[]';
                        toappendData +='<select multiple="true" '+inpOnBlur+' class="inputsubGrp_'+groupId+'_'+subgrpId+' wid-100per testmulti doOnBlur UpdateFields removeinputclass"  id="' + inpId + '" name="' + inpName + '" >';

                    jQuery.each(element['Options'], function (i, val) {
                        toappendData +='<option value="'+val+'">'+val+'</option>';
                    });
                    toappendData +='</select>';
                    } else {
                        toappendData +='<textarea '+inpOnBlur+' class="inputsubGrp_'+groupId+'_'+subgrpId+' wid-100per form-control doOnBlur '+dbClass+'" id="' + inpId + '" name="' + inpName + '" onclick="getThisId(this);loadWebpage('+atributeId+', '+pam+', '+groupId+', '+subgrpId+', '+nxtSeq+', 0);"></textarea>' ;
                    }
                }if(element['ControlName']=='CheckBox')
                        toappendData +='<input '+inpOnBlur+' type="checkbox" class="inputsubGrp_'+groupId+'_'+subgrpId+' doOnBlur '+dbClass+'" id="' + inpId + '" name="' + inpName + '" onclick="getThisId(this);loadWebpage('+atributeId+', '+pam+', '+groupId+', '+subgrpId+', '+nxtSeq+', 0);">' ;  
                if(element['ControlName']=='RadioButton'){
                        toappendData +='<input '+inpOnBlur+' value="Yes" type="radio" style="position:static"  class="inputsubGrp_'+groupId+'_'+subgrpId+' doOnBlur InsertFields" id="' + inpId + '" name="' + inpName + '" onclick="getThisId(this);loadWebpage('+atributeId+', '+pam+', '+groupId+', '+subgrpId+', '+nxtSeq+', 0);"> Yes '+
                                        '<input '+inpOnBlur+' value="No" type="radio" style="position:static"  class="inputsubGrp_'+groupId+'_'+subgrpId+' doOnBlur InsertFields" id="' + inpId + '" name="' + inpName + '" onclick="getThisId(this);loadWebpage('+atributeId+', '+pam+', '+groupId+', '+subgrpId+', '+nxtSeq+', 0);"> No ' ;  
                            }
                   if(element['ControlName']=='DropDownList') {
                        toappendData +='<select '+inpOnBlur+' onchange = '+reload+' class="inputsubGrp_'+groupId+'_'+subgrpId+' wid-100per form-control doOnBlur '+dbClass+'"  id="' + inpId + '" name="' + inpName + '" onclick="getThisId(this);loadWebpage('+atributeId+', '+pam+', '+groupId+', '+subgrpId+', '+nxtSeq+', 0);"><option value="">--Select--</option>';
                       
                      jQuery.each(element['Options'], function (i, val) {
                          toappendData +='<option value="'+val+'">'+val+'</option>';
                      });
                      toappendData +='</select>';
                  }
                       
                        toappendData +='<span class="lighttext" data-toggle="tooltip" title=""></span>' +
                        '</div></div>' +
                        '<div class="col-md-2 form-text"><div class="form-group comments">' +
                        '<textarea rows="1" cols="50" class="form-control '+dbClass_cmd+'" id="" name="' + commendName + '" placeholder="Comments"></textarea>' +
                        '</div></div>' +
                        '<div class="col-md-3 form-status"><div class="form-group status">' +
                        '<select id="" name="' + selName + '" class="form-control CampaignWiseSelDone_' + groupId + ' subGrpDisp_'+groupId+'_'+subgrpId+' dispositionSelect '+dbClass_dis+'">' +
                        '<option value="">--</option>' +
                        '<option value="A">A</option>' +
                        '<option value="D">D</option>' +
                        '<option value="M">M</option>' +
                        '<option value="V">V</option>' +
                        '</select>' +
                        '</div>' +
                        '</div></div>';

            });

            toappendData += '</div>';
            //alert(toappendData);
            $('.addGrp_' + subgrpId).append(toappendData);
            $('.GroupSeq_' + subgrpId).attr("data", nxtSeq);

            Load_totalAttInThisGrpCnt();
             $('.testmulti').fSelect();
            // checkAll(groupId,subgrpId);
            
//            (function($) {
//                $(function() {
//                    $('.testmulti').fSelect();
//                });
//            })(jQuery);
                });
        });

//    function PdfPopup()
//    {
//
//        var splitterElement = $("#horizontal"), getPane = function (index) {
//            index = Number(index);
//            var panes = splitterElement.children(".k-pane");
//            if (!isNaN(index) && index < panes.length) {
//                return panes[index];
//            }
//        };
//
//        var splitter = splitterElement.data("kendoSplitter");
//        var pane = getPane('0');
//        splitter.toggle(pane, $(pane).width() <= 0);
//
//
//        var file = $("#status option:selected").text();
//        myWindow = window.open("", "myWindow", "width=500, height=500");
//        myWindow.document.write('<iframe id="pdfframe"  src="' + file + '" style="width:100%; height:100%; overflow:hidden !important;"></iframe>');
//
//        $.ajax({
//            type: "POST",
//            url: "<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'upddateUndockSession')); ?>",
//            data: ({undocked: 'yes'}),
//            dataType: 'text',
//            async: true,
//            success: function (result) {
//
//            }
//        });
//    }
    function onMyFrameLoad() {
        $('#loaded').val('loaded');
    }

    function LoadPDF(file)
    {
        document.getElementById('frame').src = file;
        $("body", myWindow.document).find('#pdfframe').attr('src', file);
    }

    ipValidatorRegexp = /^(?:\b(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\b|null)$/;
    emailValidator = function (value, callback) {
        setTimeout(function () {
            if (value === '') {
                callback(true);
            } else if (/.+@.+/.test(value)) {
                callback(true);
            } else {
                callback(false);
            }
        }, 1000);
    };

    UrlRegexp = /^(www.\/\/)[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/;
    urlValidator = function (value, callback) {
        setTimeout(function () {
            if (UrlRegexp.test(value)) {
                callback(true);
            } else {
                callback(false);
            }
        }, 100);
    };

    var AlphbetOnlyReg = /^[a-zA-Z\s]+$/;
    AlphabetOnlyValidator = function (value, callback) {
        setTimeout(function () {
            if (AlphbetOnlyReg.test(value) == false) {
                callback(false);
            } else {
                callback(true);
            }
        }, 100);
    };
    var AlphaNumericOnlyReg = /^[a-zA-Z\s]+$/;
    AlphaNumericOnlyValidator = function (value, callback) {
        setTimeout(function () {
            if (AlphaNumericOnlyReg.test(value) == false) {
                callback(false);
            } else {
                callback(true);
            }
        }, 100);
    };
    var NumbersOnlyReg = /^[a-zA-Z\s]+$/;
    NumbersOnlyValidator = function (value, callback) {
        setTimeout(function () {
            if (NumbersOnlyReg.test(value) == false) {
                callback(false);
            } else {
                callback(true);
            }
        }, 100);
    };
    function getCustomRenderer() {
        return function (instance, td, row, col, prop, value, cellProperties) {
            Handsontable.renderers.TextRenderer.apply(this, arguments);
            td.hidden = true;
        }
    }
    function calculateSize() {
        var offset;


        offset = Handsontable.Dom.offset(example1);
        availableWidth = Handsontable.Dom.innerWidth(document.body) - offset.left + window.scrollX;
        availableHeight = Handsontable.Dom.innerHeight(document.body) - offset.top + window.scrollY;

        example1.style.width = availableWidth + 'px';
        example1.style.height = availableHeight + 'px';

    }
    function loadhandsondatafinal(id, idval, key, keysub,attrName) { var ProductionEntityId = $("#ProductionEntity").val();
        
        var subGrpArr='<?php echo str_replace("'", "\\'", json_encode($AttributesListGroupWise))?>';
            var subGrpAtt = JSON.parse(subGrpArr);
            
            var subGrpAttArr = subGrpAtt[key][keysub];
        $.ajax({
            url: '<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'ajaxgetdatahand')); ?>',
            dataType: 'json',
            type: 'POST',
            data: {ProductionEntityId: ProductionEntityId, AttributeMasterId: id},
            success: function (res) {
                //alert(res);
                var data = [], row;
                var j = 0;

                for (var i = 0, ilen = res.handson.length; i < ilen; i++) {
                    row = [];
//                    row[0] = res.handson[i].DataId;
//                    row[1] = res.handson[i].AfterNormalized;
//                    row[2] = res.handson[i].Comments;
//                    row[3] = res.handson[i].AfterDisposition;
                    
                    row[0] = res.handson[i].data;
                
//                row[0] = res.handson[i].Id;
//                row[0] = res.handson[i].AttributeValue;

                    data[res.handson[i].Id] = row;

                    j++;
                }
                //alert(data);
                hot.loadData(data);
            }
        });
        //alert(id);
        var attrsub = $("#attrsub" + idval + '_' + key + '_' + keysub).val();
        var attrdisp = $("#attrdisp" + id + '_' + idval + '_' + key + '_' + keysub).val();
        if (typeof attrsub === 'undefined' || typeof attrsub === '') {
            $("#exampleFillInHandsonModalTitle").text(attrdisp);
        } else {
            $("#exampleFillInHandsonModalTitle").text(attrsub);
        }
        var
                $container = $("#example1"),
                myattrid = id,
                $console = $("#exampleConsole"),
                $parent = $container.parent(),
                autosaveNotification,
                container3 = document.getElementById('example1'),
                hot;
        hot = new Handsontable($container[0], {
            colWidths: 100,
            height: 520,
            minSpareCols: 0,
            minSpareRows: 0,
            columnSorting: true,
            sortIndicator: true,
            manualColumnMove: true,
            stretchH: 'all',
            rowHeaders: true,
            manualRowResize: true,
            manualColumnResize: true,
            comments: false,
            contextMenu: ['undo', 'redo', 'make_read_only', 'alignment', 'remove_row'],
            colHeaders: attrName,
            columns: [
                {readOnly: true}
//                {type:'text' },{type:'text' },{ type: 'dropdown',source: ['A', 'D', 'M', 'V']}


            ],
            afterValidate: function (isValid, value, row, prop) {
                if (!isValid) {
                    $("#SubmitForm").hide();
                    alert("Data Entered is Invalid!");
                } else {
                    $("#SubmitForm").show();
                }
                if (value === '') {
                    $("#SubmitForm").show();
                }
            },
            beforeRemoveRow: function (change, source) {
                $.ajax({
                    url: '<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'ajaxremoverow')); ?>',
                    dataType: 'json',
                    type: 'POST',
                    data: {changes: change, data: hot.getData()}, // contains changed cells' data
                    success: function (result) {

                    }
                });
            },
            afterChange: function (change, source) {
                var data;
                if (source === 'loadData' || !$parent.find('input[name=autosave]').is(':checked')) {
                    return;
                }
                data = change[0];
                data[0] = hot.sortIndex[data[0]] ? hot.sortIndex[data[0]][0] : data[0];
                clearTimeout(autosaveNotification);
                $.ajax({
                    url: '<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'ajaxsavedatahand')); ?>',
                    dataType: 'json',
                    type: 'POST',
                    data: {changes: change, data: hot.getData()}, // contains changed cells' data
                    success: function (result) {

                    }
                });
                //onChange(change, source);
            },
        });

        hot.addHook('afterChange', function (changes, source) {
            if (!changes) {
                return;

            }
            var changed = changes.toString().split(",");
            var keyval = changed[1] - 1;


            $.ajax({
                url: '<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'ajaxsavehandson')); ?>',
                dataType: 'json',
                type: 'POST',
                data: {keyval: keyval, changed: changes,ProductionEntityId:ProductionEntityId,data: hot.getData()}, // contains changed cells' data
                success: function (result) {
                    if (result) {
                        // alert(result);
                        hot.updateSettings({
                            cells: function (row, col, prop) {
                                if (row == changed[0] && col == result[1]) {
                                    var cellProperties = {};
                                    cellProperties.source = result[0];
                                    return cellProperties;
                                }
                            }

                        });
                    }
                }
            });



        });



    }


    function loadhandsondatafinal_all(id, idval, key, keysub) {
        var ProductionEntityId = $("#ProductionEntity").val();
        $.ajax({
            url: '<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'ajaxgetdatahandalldata')); ?>',
            dataType: 'json',
            type: 'POST',
            data: {ProductionEntityId: ProductionEntityId, AttributeMasterId: id ,handskey:key,handskeysub:keysub},
            success: function (res) {
				var data = [];
                var j = 0;
				$.each(res.handson, function (key, val) {
                    $handle=0;row=[];
                    $.each(val, function (key2, val2) {
                    row[$handle] = val2;
                    $handle++;
                    
                });
                data[j] = row;
                    j++;
                });

                hot.loadData(data);
            }
        });
        
        var attrsub = $("#attrsub" + idval + '_' + key + '_' + keysub).val();
        var attrdisp = $("#attrdisp" + id + '_' + idval + '_' + key + '_' + keysub).val();
        if (typeof attrsub === 'undefined' || typeof attrsub === '') {
            $("#exampleFillInHandsonModalTitle").text(attrdisp);
        } else {
            $("#exampleFillInHandsonModalTitle").text(attrsub);
        }
        var
                $container = $("#example1"),
                myattrid = id,
                $console = $("#exampleConsole"),
                $parent = $container.parent(),
                autosaveNotification,
                container3 = document.getElementById('example1'),
                hot;
                
            var subGrpArr='<?php echo str_replace("'", "\\'", json_encode($AttributesListGroupWise))?>';
            var subGrpAtt = JSON.parse(subGrpArr);
            var subGrpAttArr = subGrpAtt[key][keysub];
            var j=0; var header=[]; var noofcolumn=[];
			//alert(JSON.stringify(subGrpAttArr));
            $.each( subGrpAttArr, function( key, value ) {
              //  alert(value['DisplayAttributeName'])
            header[j]=value['DisplayAttributeName'];
				noofcolumn[j]='{readOnly: true}';
            j++;
            });
          // alert(noofcolumn);
            
        hot = new Handsontable($container[0], {
            colWidths: 300,
            height: 520,
            minSpareCols: 0,
            minSpareRows: 0,
            columnSorting: true,
            sortIndicator: true,
            manualColumnMove: true,
            stretchH: 'all',
            rowHeaders: true,
            manualRowResize: true,
            manualColumnResize: true,
            comments: false,
            contextMenu: ['undo', 'redo', 'make_read_only', 'alignment', 'remove_row'],
            colHeaders: header,
            columns: noofcolumn,
			
            afterValidate: function (isValid, value, row, prop) {
                if (!isValid) {
                    $("#SubmitForm").hide();
                    alert("Data Entered is Invalid!");
                } else {
                    $("#SubmitForm").show();
                }
                if (value === '') {
                    $("#SubmitForm").show();
                }
            },
            beforeRemoveRow: function (change, source) {
                $.ajax({
                    url: '<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'ajaxremoverow')); ?>',
                    dataType: 'json',
                    type: 'POST',
                    data: {changes: change, data: hot.getData()}, // contains changed cells' data
                    success: function (result) {

                    }
                });
            },
            afterChange: function (change, source) {
                var data;
                if (source === 'loadData' || !$parent.find('input[name=autosave]').is(':checked')) {
                    return;
                }
                data = change[0];
                data[0] = hot.sortIndex[data[0]] ? hot.sortIndex[data[0]][0] : data[0];
                clearTimeout(autosaveNotification);
                $.ajax({
                    url: '<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'ajaxsavedatahand')); ?>',
                    dataType: 'json',
                    type: 'POST',
                    data: {changes: change, data: hot.getData()}, // contains changed cells' data
                    success: function (result) {

                    }
                });
                //onChange(change, source);
            },
        });

        hot.addHook('afterChange', function (changes, source) {
            if (!changes) {
                return;

            }
            var changed = changes.toString().split(",");
            var keyval = changed[1] - 1;


            $.ajax({
                url: '<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'ajaxsavehandson')); ?>',
                dataType: 'json',
                type: 'POST',
                data: {keyval: keyval, changed: changes,ProductionEntityId:ProductionEntityId,data: hot.getData()}, // contains changed cells' data
                success: function (result) {
                    if (result) {
                        // alert(result);
                        hot.updateSettings({
                            cells: function (row, col, prop) {
                                if (row == changed[0] && col == result[1]) {
                                    var cellProperties = {};
                                    cellProperties.source = result[0];
                                    return cellProperties;
                                }
                            }

                        });
                    }
                }
            });




        });




    }
    
     function LoadValue(id, value, toid,toattrid, attrid, depdid, seq) {
   
        var Region=$('#RegionId').val();
      
        var result = new Array();
        $.ajax({
            type: "POST",
            url: "<?php echo Router::url(array('controller'=>'Getjobcore','action'=>'ajaxloadresult'));?>",
            data: ({id: id, value: value, toid: toid,Region:Region}),
            dataType: 'text',
            async: false,
            success: function (result) {
                var obj = JSON.parse(result);
                          if(obj['count'] == 1){
            var attrs = document.getElementById('ProductionFields_' + toattrid + '_' + depdid + '_' + seq).attributes;
                var html = "<input type='textbox' ";
                  $.each(attrs,function(i,elem){
                      if(elem.name != "value" && elem.name != "readonly" && elem.name != "type")
                          html = html+elem.name+'="'+elem.value+'" ';
                });
                html = html+" value='"+obj['arrvalue']['0']['Value']+"' readonly />";
                             var parentObj = $('#ProductionFields_' + toattrid + '_' + depdid + '_' + seq).parent();
                             $('#ProductionFields_' + toattrid + '_' + depdid + '_' + seq).remove();
                                     parentObj.prepend(html);  

                      }else{  
                         var attrs = document.getElementById('ProductionFields_' + toattrid + '_' + depdid + '_' + seq).attributes;
                var html = "<select ";     
                 $.each(attrs,function(i,elem){
                     if(elem.name != "value" && elem.name != "readonly" && elem.name != "type")
                          html = html+elem.name+'="'+elem.value+'" ';
                });
                  html = html+">";
                      html = html+"<option value=0></option>";
                html = html+"</select>";

                  var parentObj = $('#ProductionFields_' + toattrid + '_' + depdid + '_' + seq).parent();
                             $('#ProductionFields_' + toattrid + '_' + depdid + '_' + seq).remove();
                                     parentObj.prepend(html);  
  
                var k = 1;
                //toid = 225;
                var x = document.getElementById('ProductionFields_' + toattrid + '_' + depdid + '_' + seq);
               
                document.getElementById('ProductionFields_' + toattrid + '_' + depdid + '_' + seq).options.length = 0;
                var option = document.createElement("option");
                option.text = '--Select--';
                option.value = 0;
                x.add(option, x[0]);
              
            $.each(obj['arrvalue'], function( key, element ) {
             //   obj.forEach(function (element) {
                    var option = document.createElement("option");
                    option.text = element['Value'];
                    option.value = element['Value'];
                    x.add(option, x[k]);
                    k++;
                   // }
                });
                }
            }
        
        
        });
    }
    
    $(document).ready(function() {
        $("#ProductionArea").bind("keypress", function(e) {
            if (e.keyCode == 13) {
                AjaxSave('');
                return false;
            }
        });
    });
    
    (function($) {
        $(function() {
            $('.testmulti').fSelect();
        });
    })(jQuery);
    
    //------------------------Multi Select Text-------------------------//
    $(document).on("click", ".fs-option", function () {
        var COpyTeXt = '';
        var selectId = $(this).parent().parent().parent().children(".testmulti").attr("id");
        var arr = selectId.split('_');
        var AttributeMasterId = arr[1];
        var tempSq = arr[3];
        COpyTeXt += $('#'+selectId).val();
        if(COpyTeXt == 'null'){
            COpyTeXt=" ";
        }
//        alert("AttributeMasterId_"+AttributeMasterId+'_'+tempSq+'_CopyText_'+COpyTeXt);
        $('#COpyTeXt_'+AttributeMasterId+'_'+tempSq).val(COpyTeXt);
        var selectedIdVal = $('#'+selectId).val();
        Load_verifiedAttrCnt_forselect($('#'+selectId));
        Load_totalAttInThisGrpCnt();

    });
    //------------------------Multi Select Text-------------------------//
            
            
</script>
<style>
	.text-danger {
		border-color: #f55753 !important;
		border-width: 0.5px !important;
	}
	
	.lite-blue{
            color: #a0b6bd !important;
        }
        .wid-100per{
            width: 100% !important;
        }

    .overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.7);
        transition: opacity 500ms;
        visibility: hidden;
        opacity: 0;
    }
    .overlay:target {
        visibility: visible;
        opacity: 1;
    }


    .popup {
        margin: 150px auto;
        padding: 20px;
        background: #fff;
        border-radius: 5px;
        width: 40%;
        position: relative;
        transition: all 5s ease-in-out;

    }

    .popup h2 {
        margin-top: 0;
        color: #333;
        font-family: Tahoma, Arial, sans-serif;
    }
    .popup .close {
        position: absolute;
        top: 20px;
        right: 30px;
        transition: all 200ms;
        font-size: 30px;
        font-weight: bold;
        text-decoration: none;
        color: #333;
    }
    .popup .close:hover {
        color: #fdc382;
    }
    .popup .content {
        max-height: 30%;
        overflow: auto;
    }

    #vertical {
        height: 750px;
        margin: 0 auto;
    }
    #left-pane,#right-pane  { background-color: rgba(60, 70, 80, 0.05); }
    .pane-content {
        padding: 0 10px;
    }
</style>
<?php
if ($this->request->query['continue'] == 'yes') {
    echo "<script>getJob();</script>";
}
?>