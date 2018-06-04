<link data-jsfiddle="common" rel="stylesheet" media="screen" href="webroot/dist/handsontable.css">
<link data-jsfiddle="common" rel="stylesheet" media="screen" href="webroot/dist/pikaday/pikaday.css">
<script data-jsfiddle="common" src="webroot/dist/pikaday/pikaday.js"></script>
<script data-jsfiddle="common" src="webroot/dist/moment/moment.js"></script>
<script data-jsfiddle="common" src="webroot/dist/zeroclipboard/ZeroClipboard.js"></script>
<script data-jsfiddle="common" src="webroot/dist/numbro/numbro.js"></script>
<script data-jsfiddle="common" src="webroot/dist/numbro/languages.js"></script>
<script data-jsfiddle="common" src="webroot/dist/handsontable.js"></script>
<script src="webroot/js/samples.js"></script>
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
        .row{
            height: 300px;
        }
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
        .panel-group .panel-heading{padding:0;background:#f4f7f8;}
        .panel-body{border:1px solid #f4f7f8;}
        .panel-group .panel-title{float:none;padding:15px 10px;}  
        /*        iframe{border:none;width:100%;height: 369px;}*/
        object{height: 81% !important;
               position: absolute;}
        /*    object{border:none;width:100%;height: 369px;}*/
        .row{height:800px;}
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
        .panel-group .panel-collapse .panel-body{padding: 15px 10px;}
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
        .fa-minus-circle,.fa-plus-circle,.fa-chevron-circle-right,.fa-edit,.fa-times-circle,.fa-save{color:#a0b6bd;font-size:18px;cursor:pointer;}
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
            min-height: 200px;
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
        .fa-plus-circle{color:green !important;}
        .fa-minus-circle{color:red !important;}
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

        .prev{position: absolute;
              float: left;
              top: 0px;}
        .next{position: absolute;
              float: right;
              top: 0px;right:0px;}

        .multi-field .form-group {
            margin-bottom: 15px;
            width: 24%;
            display: inline-block !important;}

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
            width: 12em;
            overflow: hidden;
            text-overflow: ellipsis;
            float:left;
        }

        .add-field{ float: right;
                    position: relative;
                    right: 20px;
                    top: -45px;}
        .remove-field{ float: right;
                       position: relative;
                       top: 44px;
                       right: 50px;}

        .multi-field .form-group{ height: 55px;vertical-align:top;}
        select.form-control{width:90px;}
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
        .form-group.comments{width:254px; margin-bottom: 35px;}
        .form-group.status{width:15%;}
        .form-group.status div{position: absolute;
                               float: right;
                               right: 95px;}
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
        </style>

        <body class="animsition site-navbar-small app-work">
        <!-- Project List Starts -->
        <!-- Breadcrumb Starts -->

        <form name="ProductionArea" id="ProductionArea" method="post">
            <div class="panel-heading p-b-0">
                <div class="col-xxl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-header p-l-0 p-r-0">
                        <div class="projet-details">
                            <h1 class="page-title">FDRID: <?php echo $FDRID; ?>
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
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb Ends -->
            <div class="panel m-l-30 m-r-30">
                <div class="panel-body">
                    <div id="splitter">
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
                                                <a class="nav-link" data-toggle="tab" href="#googletab" aria-controls="googletab" role="tab">Google Search</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="leftpane">
                                            <div class="tab-pane active" id="exampleTabsOne" role="tabpanel" style="display:none !important;">
                                                <object width="100%" onload="onMyFrameLoad(this)" height="100%" style="visibility:visible" id="frame1" name="frame1" data="" width="auto" height="auto"></object>

                                            </div>
                                            <div class="tab-pane" id="googletab" role="tabpanel">
                                                <div><div class="goto"><a href="javascript: void(0);" onclick="$('#frame2').attr('data', 'https://www.google.co.in').hide().show();"> Go to Google </a></div><div><object onload="onMyFrameLoad(this)" width="100%" height="100%" id="frame2" sandbox="" data="https://www.google.com/ncr"></object></div></div>
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
                                    <input class="UpdateFields" type="hidden" name="InputEntityId" id="InputEntityId" value="<?php echo $InputEntityId; ?>">

                                    <input type="hidden" name="attrGroupId" id="attrGroupId">
                                    <input type="hidden" name="attrSubGroupId" id="attrSubGroupId">
                                    <input type="hidden" name="attrId" id="attrId">
                                    <input type="hidden" name="ProjattrId" id="ProjattrId">
                                    <input type="hidden" name="seq" id="seq">

                                    <div class="panel-group panel-group-continuous" id="exampleAccordionContinuous" aria-multiselectable="true" role="tablist">
                                        <div class="panel">
                                            <?php
                                            $i = 0;
                                            foreach ($AttributeGroupMaster as $key => $GroupName) {
                                                if ($i == 0) {
                                                    $ariaexpanded = 'aria-expanded="true"';
                                                    $collapseIn = "collapse in";
                                                    $collapsed = "";
                                                } else {
                                                    $ariaexpanded = 'aria-expanded="false"';
                                                    $collapseIn = "collapse";
                                                    $collapsed = "collapsed";
                                                }
                                                ?>
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
                                                    foreach ($AttributesListGroupWise[$key] as $keysub => $valuesSub) {
                                                        ?>

                                                        <div class="panel-body panel-height">
                                                            <?php
                                                            if ($keysub != 0) {
                                                                $isDistinct = array_search($AttributeSubGroupMasterJSON[$key][$keysub], $distinct);
                                                                ?>
                                                                <label class="form-control-label font-weight-400"> <?php echo $AttributeSubGroupMasterJSON[$key][$keysub]; ?></label> 
                                                                <?php if ($isDistinct != '') {
                                                                    ?>
                                                                    <i id="subgrp-add-field" style="top:0px!important;float:left;right:0px;" class="fa fa-plus-circle pull-right add-field m-r-10 addSubgrpAttribute" data="<?php echo $keysub; ?>" data-groupId="<?php echo $key; ?>" data-groupName="<?php echo $AttributeSubGroupMasterJSON[$key][$keysub];
                                                ; ?>"></i>
                                                                    <?php
                                                                }
                                                                ?>
                                                                <input type="hidden" value="<?php echo $AttributeSubGroupMasterJSON[$key][$keysub]; ?>" id="attrsub<?php echo $i; ?>_<?php echo $key; ?>_<?php echo $keysub; ?>">

                                                                <?php
                                                            }
                                                            //pr($GrpSercntArr);
                                                            if ($isDistinct != '') {
                                                                $GroupSeqCnt = $GrpSercntArr[$keysub]['MaxSeq'];
                                                            } else {
                                                                $GroupSeqCnt = 1;
                                                            }

                                                            for ($grpseq = 1; $grpseq <= $GroupSeqCnt; $grpseq++) {
                                                                ?>
                                                                <input value="1" type="hidden" data="<?php echo $grpseq; ?>" name="GroupSeq_<?php echo $keysub; ?>" class="GroupSeq_<?php echo $keysub; ?>">
                                                                <?php
                                                                foreach ($valuesSub as $keyprodFields => $valprodFields) {
                                                                    if ($isDistinct != '')
                                                                        $totalSeqCnt = 0;
                                                                    else
                                                                        $totalSeqCnt = count($processinputdata[$valprodFields['AttributeMasterId']]);

                                                                    $dbClassName = "UpdateFields";
                                                                    if ($totalSeqCnt == 0) {
                                                                        $totalSeqCnt = 1;
                                                                        $dbClassName = "InsertFields";
                                                                    }
                                                                    ?>

                                                                    <div class="multi-field-wrapper">
                                                                        <div class="multi-fields">
                                                                            <?php
                                                                            for ($thisseq = 1; $thisseq <= $totalSeqCnt; $thisseq++) {

                                                                                $ProdFieldsValue = $processinputdata[$valprodFields['AttributeMasterId']][$thisseq][$DependentMasterIds['ProductionField']]['0'];
                                                                                $InpValueFieldsValue = $processinputdata[$valprodFields['AttributeMasterId']][$thisseq][$DependentMasterIds['InputValue']]['0'];
                                                                                $DispositionFieldsValue = $processinputdata[$valprodFields['AttributeMasterId']][$thisseq][$DependentMasterIds['Disposition']]['0'];
                                                                                $CommentsFieldsValue = $processinputdata[$valprodFields['AttributeMasterId']][$thisseq][$DependentMasterIds['Comments']]['0'];
                                                                                $ProdFieldsName = "ProductionFields_" . $valprodFields['AttributeMasterId'] . "_" . $DependentMasterIds['ProductionField'] . "_" . $thisseq;
                                                                                $InpValueFieldsName = "ProductionFields_" . $valprodFields['AttributeMasterId'] . "_" . $DependentMasterIds['InputValue'] . "_" . $thisseq;
                                                                                $DispositionFieldsName = "ProductionFields_" . $valprodFields['AttributeMasterId'] . "_" . $DependentMasterIds['Disposition'] . "_" . $thisseq;
                                                                                $CommentsFieldsName = "ProductionFields_" . $valprodFields['AttributeMasterId'] . "_" . $DependentMasterIds['Comments'] . "_" . $thisseq;

                                                                                if ($thisseq > 1)
                                                                                    $disnone = "display:none;";
                                                                                else
                                                                                    $disnone = "";

                                                                                $inpuControlType = $valprodFields['ControlName'];
                                                                                if ($inpuControlType == "RadioButton" || $inpuControlType == "CheckBox")
                                                                                    $inpClass = 'class="doOnBlur ' . $dbClassName . '" ';
                                                                                else
                                                                                    $inpClass = 'class="form-control doOnBlur ' . $dbClassName . '" ';

                                                                                $inpId = 'id="prodInput_' . $valprodFields['AttributeMasterId'] . '" ';
                                                                                $inpName = 'name="' . $ProdFieldsName . '" ';
                                                                                $inpValue = 'value="' . $ProdFieldsValue . '" ';
                                                                                $inpOnClick = 'onclick="loadWebpage(' . $valprodFields['AttributeMasterId'] . ', ' . $valprodFields['ProjectAttributeMasterId'] . ', ' . $valprodFields['MainGroupId'] . ', ' . $valprodFields['SubGroupId'] . ', ' . $thisseq . ', 0);" ';
                                                                                ?>

                                                                                <div id="MultiField_<?php echo $valprodFields['AttributeMasterId']; ?>_<?php echo $thisseq; ?>" class="multi-field clearfix MultiField_<?php echo $valprodFields['AttributeMasterId']; ?> CampaignWiseFieldsDiv_<?php echo $key; ?>" style="<?php echo $disnone; ?>">
                                                                                    <div class="form-group" style=""><p><?php echo $valprodFields['DisplayAttributeName'] ?></p>
                                                                                        <input type="hidden" value="<?php echo $valprodFields['DisplayAttributeName'] ?>" id="attrdisp<?php echo $valprodFields['AttributeMasterId']; ?>_<?php echo $i; ?>_<?php echo $key; ?>_<?php echo $keysub; ?>">
                                                                                    </div>	
                                                                                    <div class="form-group">
                                                                                        <?php
                                                                                        if ($inpuControlType == "TextBox") {
                                                                                            echo '<input type="text" ' . $inpClass . $inpId . $inpName . $inpValue . $inpOnClick . '>';
                                                                                        } else if ($inpuControlType == "CheckBox") {
                                                                                            echo '<input type="checkbox" ' . $inpClass . $inpId . $inpName . $inpValue . $inpOnClick . '>';
                                                                                        } else if ($inpuControlType == "RadioButton") {
                                                                                            if ($ProdFieldsValue == "Yes")
                                                                                                $yesSel = " selected ";
                                                                                            if ($ProdFieldsValue == "No")
                                                                                                $noSel = " selected ";
                                                                                            echo '<input value="Yes" type="radio" ' . $inpClass . $inpId . $inpName . $inpOnClick . $yesSel . '> Yes  
																	<input value="No" type="radio" ' . $inpClass . $inpId . $inpName . $inpOnClick . $noSel . '> No';
                                                                                        }
                                                                                        else if ($inpuControlType == "DropDownList") {
                                                                                            echo '<select ' . $inpClass . $inpId . $inpName . $inpOnClick . '>
																			<option value="">--Select--</option>
																		  </select>';
                                                                                        }
                                                                                        ?>
                                                                                        <span class="lighttext" data-toggle="tooltip" title="<?php echo $InpValueFieldsValue; ?>"><?php echo $InpValueFieldsValue; ?></span>
                                                                                    </div>
                                                                                    <div class="form-group comments">
                                                                                        <textarea rows="3" cols="50" class="form-control <?php echo $dbClassName; ?>" id="" name="<?php echo $CommentsFieldsName; ?>" placeholder="Comments" onclick="loadWebpage(<?php echo $valprodFields['AttributeMasterId']; ?>, <?php echo $valprodFields['ProjectAttributeMasterId']; ?>, <?php echo $valprodFields['MainGroupId']; ?>, <?php echo $valprodFields['SubGroupId']; ?>,<?php echo $thisseq; ?>, 0);"><?php echo $CommentsFieldsValue; ?></textarea>
                                                                                    </div>
                                                                                    <div class="form-group status">
                                                                                        <select id="" name="<?php echo $DispositionFieldsName; ?>"  class="<?php echo $dbClassName; ?> form-control CampaignWiseSelDone_<?php echo $key; ?> dispositionSelect">
                                                                                            <option value="">--</option>
                                                                                            <option value="A" <?php
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
                                                                                    </div>

                                                                                    <?php
                                                                                    $array1 = $valprodFields['AttributeMasterId'];
                                                                                    $array2 = $HelpContantDetails;
                                                                                    if (in_array($array1, $array2)) {
                                                                                        ?>
                                                                                        <!--  ------------Tool Tip Starts------------->
                                                                                        <button type="button" id="tooltips" class="tooltips" data-target="#helpmodal" style="margin-top:5px;" data-toggle="modal" title="Help" onclick='loadHelpContent(<?php echo $valprodFields['AttributeMasterId']; ?>, "<?php echo $valprodFields['DisplayAttributeName']; ?>");' >?</button>
                                                                                        <!--  ---------------Tool Tip End--------------->
                                                                                    <?php } ?>
                                                                            <!--<i class="fa fa-minus-circle remove-field"></i>-->
                                                                                </div>
                                                                                <?php
                                                                            }
                                                                            ?>
                                                                            <span class="add_<?php echo $valprodFields['AttributeMasterId']; ?>"><br></span>

                                                                            <input value="1" type="hidden" data="<?php echo $thisseq - 1; ?>" name="ShowingSeqDiv_<?php echo $valprodFields['AttributeMasterId']; ?>" class="ShowingSeqDiv_<?php echo $valprodFields['AttributeMasterId']; ?>">

                                                                            <?php
                                                                            if ($totalSeqCnt > 1) {
                                                                                ?>


                                                                                <div class="">
                                                                                    <i class="pull-right"><button type="button" class="btn btn-default offcanvas__trigger--close" onclick="loadhandsondatafinal('<?php echo $valprodFields['AttributeMasterId']; ?>', '<?php echo $i; ?>', '<?php echo $key; ?>', '<?php echo $keysub; ?>');" data-rel="page-tag" data-target="#exampleFillInHandson" data-toggle="modal">Update</button></i>
                                                                                    <i class="fa fa-angle-double-right pull-right m-r-5" onclick="loadMultiField('next', '<?php echo $valprodFields['AttributeMasterId']; ?>', '<?php echo $totalSeqCnt; ?>');"></i> 
                                                                                    <i class="fa fa-angle-double-left pull-right" onclick="loadMultiField('previous', '<?php echo $valprodFields['AttributeMasterId']; ?>', '<?php echo $totalSeqCnt; ?>');"></i>
                                                                                </div>
                                                                                <?php
                                                                            }
                                                                            ?>
                                                                        </div>
                                                                        <i id="add-field" class="fa fa-plus-circle pull-right add-field m-r-10 addAttribute" data="<?php echo $valprodFields['AttributeMasterId']; ?>" data-groupId="<?php echo $key; ?>" data-groupName="<?php echo $valprodFields['DisplayAttributeName']; ?>"></i>
                                                                    </div>

                                                                    <br>
                                                                <?php
                                                                }
                                                            } // group seq loop
                                                            ?>
                                                            <span class="addGrp_<?php echo $keysub; ?>"><br></span>
                                                        </div>
                                                    <?php }
                                                    ?>
                                                </div>
                                                <!--                                    ----------------------------first campaign end--------------------------------------->
                                                <?php
                                                $i++;
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
                    <button type="button" href="#" class="btn btn-default offcanvas__trigger--open" onclick="multipleUrl();" id="multiplelinkbutton" data-rel="page-tag">Multiple Source Links</button>
                    <button type="button" class="btn btn-default offcanvas__trigger--close" onclick="loadReferenceUrl();" data-rel="page-tag" data-target="#exampleFillIn" data-toggle="modal">View All</button>
                    <!--                <button class="btn btn-default" name='pdfPopUP' id='pdfPopUp' onclick="PdfPopup();" type="button">Undock</button>-->
                </div>
                <div class="col-lg-6 pull-right m-t-5 m-b-5">		
                    <input  type="hidden" name="saveandcontinue" value="yes">
                    <button type="submit" name='Submit' value="Submit" class="btn btn-primary pull-right" onclick="return formSubmit();"> Submit & Continue </button>
                    <button type="button" name='Save' value="Save" id="save_btn" class="btn btn-primary pull-right m-r-5" onclick="AjaxSave('');">Save</button>
                    <button type="button" class="btn btn-default pull-right m-r-5" data-target="#querymodal" data-toggle="modal">Query</button>
                </div>
            </div>
        </form>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-right-0 padding-left-0">
            <!--        <div class="modal fade modal-fill-in">-->
            <div id="page-tag" class="offcanvas multisourcediv">
                <div class="panel m-30">
                    <div class="panel-body panel-height multiple-height">
                        <!-- <a class="panel-action fa fa-cog pull-right" data-toggle="panel-fullscreen" aria-hidden="true" style="color:red;"></a> -->
                        <div class="col-xs-12 col-xl-12" id="addnewurl"> 
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
                    <div class="panel-footer">
                        <button type="button" class="btn btn-primary pull-right m-r-5" data-rel="page-tag" onclick="addReferenceUrl();">Add</button>		
                        <button type="button" class="btn btn-default pull-right m-r-5 offcanvas__trigger--close multisorcedivclose" data-rel="page-tag">Cancel</button>

                    </div>
                </div>
            </div>
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
                            <div class="col-xs-12 col-xl-12">
                                <div id="LoadGroupAttrValue"> 
                                </div>
                            </div>
                            <div class="col-xs-12 col-xl-12 m-t-30">
                                <button type="button" class="btn btn-default pull-right m-r-5" data-dismiss="modal">Cancel</button>
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
    <?php //foreach (){    ?>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="HelpModelAttribute"></h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <span id='HelpModelContant'>

                                </span>
                            </div>
                        </div>
    <?php // }    ?>
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
                        ?>
                    </div>
                </div>
            </div>
            <!-- End Modal -->		
        </div>	

        <script type="text/javascript">

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


            $(document).ready(function () {

                $('#multiplelinkbutton').hide();
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
                    data: ({ProjectId: projectid, RegionId: regionid, InputEntityId: inputentityid, ProdEntityId: prodentityid, Attr: FirstAttrId, ProjAttr: FirstProjAttrId, MainGrp: FirstGroupId, SubGrp: FirstSubGroupId}),
                    dataType: 'text',
                    async: true,
                    success: function (result) {
                        $('#prodInput_' + FirstAttrId).focus();
                        var obj = JSON.parse(result);

                        //obj['attrinitialhtml']='1.html';

                        if (obj['attrinitialhtml'] != '' && obj['attrinitialhtml'] != null) {

                            $('#exampleTabsOne').show();
                            var htmlfileinitial = "<?php echo HTMLfilesPath; ?>" + obj['attrinitialhtml'];
                            document.getElementById('frame1').data = htmlfileinitial;

                            var object = document.getElementById("frame1");

                            object.onload = function () {
                                spanArr = $("object").contents().find('span');
                                $("object").contents().find('span').each(function () {
                                    var $span = $(this);
                                    var spanId = $span.attr('title');
                                    if (typeof (spanId) != "undefined" && spanId !== null && $(this).text() != '') {
                                        $span.attr('onClick', "parent.focusProjeId('" + spanId + "');");
                                    }
                                });
                            };

                            $('#prodInput_' + FirstAttrId).focus();


                        } else if (obj['attrinitiallink'] != '' && obj['attrinitiallink'] != null) {

                            $('#exampleTabsOne').show();
                            document.getElementById('frame1').data = obj['attrinitiallink'];
                            $('#prodInput_' + FirstAttrId).focus();
                        }
                    }
                });
                loadWebpage(FirstAttrId, FirstProjAttrId, FirstGroupId, FirstSubGroupId, sequence, 0);
            });

            function focusProjeId(projId) {

                var projArr = projId.split('(');
                var ProjAttribute = projArr[0];
                var jsonArr = '<?php echo json_encode($ModuleAttributes); ?>';
                jsonArr = JSON.parse(jsonArr);
                var proKey;
                var mainGrp;
                jQuery.each(jsonArr, function (i, val) {
                    if (val['AttributeName'] == ProjAttribute) {
                        proKey = val['AttributeMasterId'];
                        mainGrp = val['MainGroupId'];

                    }
                });

                //alert(mainGrp)

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
                document.getElementById('prodInput_' + proKey).focus();
                $(href).height("4800");

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
                        $("#HelpModelContant").html(result);
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

                if (attr == attrid && Projattrid == projattr && attrGrpid == maingroup && attrSubGrpid == subgroup && val == 0 && (sequence == seq || sequence == 0)) {
                    return false;
                } else {
                    $('#exampleTabsOne').hide();
                    //$('#exampleTabsTwo').hide();
                    $('#multiplelinkbutton').show();
                    $.ajax({
                        type: "POST",
                        url: "<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'ajaxgetafterreferenceurl')); ?>",
                        data: ({ProjectId: projectid, RegionId: regionid, InputEntityId: inputentityid, ProdEntityId: prodentityid, Attr: attr, ProjAttr: projattr, MainGrp: maingroup, SubGrp: subgroup, seq: seq}),
                        dataType: 'text',
                        async: true,
                        success: function (result) {

                            $('#exampleTabsOne').hide();
                            $('#exampleTabsTwo').hide();
                            $("#LoadAttrValue").empty();

                            //$('#exampleTabsOne').hide();
                            //$('#exampleTabsTwo').hide();
                            //$("#LoadAttrValue").empty();

                            if (result != '') {
                                $("#LoadAttrValue").empty();
                                var obj = JSON.parse(result);
                                $('.CntBadge').hide();
                                if (obj['attrval'] != '' && obj['attrval'] != null) {
                                    obj['attrval'].forEach(function (element) {
                                        if (element['AttributeValue'] != '' && element['AttributeValue'] != null) {
                                            var cols = "";
                                            cols += '<div class="col-xs-12 col-xl-4">';
                                            cols += '<div class="srcblock box1 update-cart offcanvas__trigger--close" id="demo">';
                                            cols += '<i class="fa fa-times-circle edit1" onclick="DeleteUrl(' + attr + ',' + projattr + ',' + maingroup + ',' + subgroup + ',' + element['Id'] + ');"></i>';
                                            if (element['HtmlFileName'] != '' && element['HtmlFileName'] != null) {
                                                var htmlfile = element['HtmlFileName'];
                                                cols += '<a href="#" title=' + element['AttributeValue'] + ' value="' + htmlfile + '" id="attrclick" onclick="loadPDF(this);" class="current text-center text update-cart">' + element['AttributeValue'].substring(0, 45) + '</a>';
                                            } else {
                                                cols += '<a href="#" title=' + element['AttributeValue'] + ' value=' + element['AttributeValue'] + ' id="attrclick" onclick="loadPDFUrl(this);" class="current text-center text update-cart">' + element['AttributeValue'].substring(0, 45) + '</a>';
                                            }
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
                                if (val != 1) {
                                    if (obj['attrinitialhtml'] != '' && obj['attrinitialhtml'] != null) {
                                        $('#exampleTabsOne').show();

                                        var htmlfileinitial = "<?php echo HTMLfilesPath; ?>" + obj['attrinitialhtml'];
                                        document.getElementById('frame1').data = htmlfileinitial;
                                    } else if (obj['attrinitiallink'] != '' && obj['attrinitiallink'] != null) {
                                        $('#exampleTabsOne').show();

                                        document.getElementById('frame1').data = obj['attrinitiallink'];
                                    }
                                }
                                obj['attrcnt'].forEach(function (element) {

                                    if (element['cnt'] > 0) {
                                        $('#CntBadge_' + element['AttributeMainGroupId']).show();
                                        $('#CntBadge_' + element['AttributeMainGroupId']).text(element['cnt']);
                                        //document.getElementById('CntBadge_' + element['AttributeMainGroupId']).innerHTML = ;
                                    }

                                });
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
                }

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

                            }
                        }
                    });
                    return true;
                } else {
                    return false;
                }

            }

            function loadPDF(anchor)
            {

                $('#exampleTabsOne').show();

                var cookieValue = anchor.getAttribute('value');

                var htmlfile = "<?php echo HTMLfilesPath; ?>" + cookieValue;
                document.getElementById('frame1').data = htmlfile;

                var text = cookieValue;
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
                        url: "<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'ajaxloadmultipleurlcount')); ?>",
                        data: ({NewUrl: text, ProjectId: projectid, RegionId: regionid, InputEntityId: inputentityid, ProdEntityId: prodentityid, AttrGroup: attrGrpid, AttrSubGroup: attrSubGrpid, AttrId: attrid, ProjAttrId: Projattrid, seq: sequence}),
                        dataType: 'text',
                        async: true,
                        success: function (result) {
                            if (result != '' && result != null) {
                                var obj = JSON.parse(result);
                                $('.CntBadge').hide();
                                $('#exampleFillIn').modal('hide');
                                $(".multisorcedivclose").trigger("click");
                                obj.forEach(function (element) {
                                    if (element['cnt'] > 0) {
                                        $('#CntBadge_' + element['AttributeMainGroupId']).show();
                                        document.getElementById('CntBadge_' + element['AttributeMainGroupId']).innerHTML = element['cnt'];
                                    }
                                });
                            }
                        }
                    });
                }
            }

            function loadPDFUrl(file) {

                $('#exampleTabsOne').show();

                $('.update-cart').click(function (e) {
                    e.preventDefault();
                    return false;
                });
                var file1 = file.getAttribute('value');

                $("#frame1").attr('data', file1).hide().show();

                var text = file1;
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
                        url: "<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'ajaxloadmultiplelinkcount')); ?>",
                        data: ({NewUrl: text, ProjectId: projectid, RegionId: regionid, InputEntityId: inputentityid, ProdEntityId: prodentityid, AttrGroup: attrGrpid, AttrSubGroup: attrSubGrpid, AttrId: attrid, ProjAttrId: Projattrid, seq: sequence}),
                        dataType: 'text',
                        async: true,
                        success: function (result) {
                            if (result != '' && result != null) {
                                var obj = JSON.parse(result);
                                $('.CntBadge').hide();
                                $('#exampleFillIn').modal('hide');
                                $(".multisorcedivclose").trigger("click");
                                obj.forEach(function (element) {
                                    if (element['cnt'] > 0) {
                                        $('#CntBadge_' + element['AttributeMainGroupId']).show();
                                        document.getElementById('CntBadge_' + element['AttributeMainGroupId']).innerHTML = element['cnt'];
                                    }
                                });
                            }
                        }
                    });
                }
            }

            function addReferenceUrl() {
                $('#addnewurl').show();
                $('#addurl').val('');

            }

            function loadReferenceUrl() {

                var projectid = $('#ProjectId').val();
                var regionid = $('#RegionId').val();
                var inputentityid = $('#InputEntityId').val();
                var prodentityid = $('#ProductionEntity').val();

                var groupId = $("#attrGroupId").val();
                $.ajax({
                    type: "POST",
                    url: "<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'ajaxgetgroupurl')); ?>",
                    data: ({ProjectId: projectid, RegionId: regionid, InputEntityId: inputentityid, ProdEntityId: prodentityid, groupId: groupId}),
                    dataType: 'text',
                    async: true,
                    success: function (result) {
                        $("#LoadGroupAttrValue").empty();
                        if (result != '' && result != null) {
                            $("#LoadGroupAttrValue").empty();
                            var obj = JSON.parse(result);
                            if (obj != '' && obj != null) {
                                obj.forEach(function (element) {
                                    if (element['AttributeValue'] != '' && element['AttributeValue'] != null) {
                                        var cols = "";
                                        cols += '<div class="col-xs-12 col-xl-4">';
                                        cols += '<div class="srcblock box1 update-cart" id="demo" data-dismiss="modal">';
                                        if (element['HtmlFileName'] != '' && element['HtmlFileName'] != null) {
                                            var htmlfile = element['HtmlFileName'];
                                            cols += '<span class="badge CntBadge" style="display: inline-block;">' + element['attrcnt'] + '</span> <a href="#" title=' + element['AttributeValue'] + ' value="' + htmlfile + '" id="attrclick" onclick="loadPDF(this);"  class="current text-center text update-cart">' + element['AttributeValue'].substring(0, 45) + '</a>';
                                        } else if (element['AttributeValue'] != '' && element['AttributeValue'] != null) {
                                            cols += '<span class="badge CntBadge" style="display: inline-block;">' + element['attrcnt'] + '</span> <a href="#" title=' + element['AttributeValue'] + ' value=' + element['AttributeValue'] + ' id="attrclick" onclick="loadPDFUrl(this);" class="current text-center text">' + element['AttributeValue'].substring(0, 45) + '</a>';
                                        }
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

            function multipleUrl() {
                $('#addnewurl').hide();
            }
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
                    $(".MultiField_" + attributeMasterId).hide();
                    $("#MultiField_" + attributeMasterId + "_" + nex).show();
                    $(".ShowingSeqDiv_" + attributeMasterId + "").val(nex);
                }

                if (action == 'previous' && totalseq >= prev && prev > 0) {
                    $(".MultiField_" + attributeMasterId).hide();
                    $("#MultiField_" + attributeMasterId + "_" + prev).show();
                    $(".ShowingSeqDiv_" + attributeMasterId + "").val(prev);
                }
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

                AjaxSave('');
                return true;
            }

            function AjaxSave(addnewpagesave) {
                
                 Updatedata = $(".UpdateFields").serialize();
                 Inputdata = $(".InsertFields").serialize();

                $("#save_btn").html("Please wait data saving...");
                //$("#save_btn").attr("disabled", "disabled");

                $.ajax({
                    type: "POST",
                    url: "<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'ajaxsave')); ?>",
                    data: ({Updatedata: Updatedata, Inputdata: Inputdata}),
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
                    }
                });
            }

        </script>
    </body>
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
        var closestDisVal = thisObj.parent().parent().find(".dispositionSelect").val();
        //if(closestDisVal=="") {
        var thisinpuval = thisObj.val();
        var spaninpuval = thisObj.parent().find('.lighttext').text();

        if (spaninpuval == thisinpuval && spaninpuval != "") {
            thisObj.parent().parent().find(".dispositionSelect").val('V');
        }

        if (spaninpuval != thisinpuval && spaninpuval != "" && thisinpuval != "") {
            thisObj.parent().parent().find(".dispositionSelect").val('M');
        }

        if (spaninpuval != thisinpuval && spaninpuval == "" && thisinpuval != "") {
            thisObj.parent().parent().find(".dispositionSelect").val('A');
        }
        //}
    }

    function getJob()
    {
        window.location.href = "Getjobcore?job=newjob";
    }

    $(document).ready(function () {
        Load_totalAttInThisGrpCnt();

        $(document).on("blur", ".doOnBlur", function (e) {
            Load_verifiedAttrCnt($(this));
            Load_totalAttInThisGrpCnt();
        });

        $(document).on("change", ".dispositionSelect", function (e) {
            Load_totalAttInThisGrpCnt();
        });

        $(document).on("click", ".remove-field", function (e) {
            var atributeId = $(this).attr("data");
            var maxSeqCnt = $('.ShowingSeqDiv_' + atributeId).attr("data");
            var nxtSeq = parseInt(maxSeqCnt);

            $(this).parent().next('br').remove();
            $(this).parent().remove();
            Load_totalAttInThisGrpCnt();

            var nxtSeq = nxtSeq - 1;
            $('.ShowingSeqDiv_' + atributeId).attr("data", nxtSeq);
        });
        $(document).on("click", ".removeGroup-field", function (e) {
            var groupId = $(this).attr("data");
            var maxSeqCnt = $('.GroupSeq_' + atributeId).attr("data");
            var nxtSeq = parseInt(maxSeqCnt);

            $(this).parent().next('br').remove();
            $(this).parent().remove();
            Load_totalAttInThisGrpCnt();

            var nxtSeq = nxtSeq - 1;
            $('.ShowingSeqDiv_' + atributeId).attr("data", nxtSeq);
        });
        $('.addAttribute').on('click', function () {
            var atributeId = $(this).attr("data");
            var groupId = $(this).attr("data-groupId");
            var groupName = $(this).attr("data-groupName");
            var maxSeqCnt = $('.ShowingSeqDiv_' + atributeId).attr("data");
            var nxtSeq = parseInt(maxSeqCnt) + 1;

            var inpName = 'NewProductionField_' + atributeId + '_<?php echo $DependentMasterIds['ProductionField']; ?>_' + nxtSeq;
            var commendName = 'NewProductionField_' + atributeId + '_<?php echo $DependentMasterIds['Comments']; ?>_' + nxtSeq;
            var selName = 'NewProductionField_' + atributeId + '_<?php echo $DependentMasterIds['Disposition']; ?>_' + nxtSeq;
            //alert(nxtSeq);
            var toappendData = '<div id="MultiField_' + atributeId + '_' + nxtSeq + '" class="multi-field clearfix MultiField_' + atributeId + ' CampaignWiseFieldsDiv_' + groupId + '">' +
                    '<div class="form-group" style=""><p>' + groupName + '</p></div>' +
                    '<div class="form-group">' +
                    '<input type="text" class="form-control doOnBlur InsertFields" id="prodInput_' + atributeId + '" name="' + inpName + '">' +
                    '<span class="lighttext" data-toggle="tooltip" title=""></span>' +
                    '</div>' +
                    '<div class="form-group comments">' +
                    '<textarea rows="3" cols="50" class="form-control InsertFields" id="" name="' + commendName + '" placeholder="Comments"></textarea>' +
                    '</div>' +
                    '<div class="form-group status">' +
                    '<select id="" name="' + selName + '" class="form-control CampaignWiseSelDone_' + groupId + ' dispositionSelect InsertFields">' +
                    '<option value="">--</option>' +
                    '<option value="A">A</option>' +
                    '<option value="D">D</option>' +
                    '<option value="M">M</option>' +
                    '<option value="V">V</option>' +
                    '</select>' +
                    '</div>' +
                    '<i class="fa fa-minus-circle removeGroup-field" data="' + atributeId + '"></i>' +
                    '</div><br>';

            $('.add_' + atributeId).append(toappendData);
            $('.ShowingSeqDiv_' + atributeId).attr("data", nxtSeq);

            Load_totalAttInThisGrpCnt();
        });

        $('.addSubgrpAttribute').on('click', function () {


            var subgrpId = $(this).attr("data");
            ;
            var groupId = $(this).attr("data-groupId");
            ;
            var subGrpAtt = JSON.parse('<?php echo json_encode($AttributesListGroupWise); ?>');
            var subGrpAttArr = subGrpAtt[groupId][subgrpId];
            var groupName = 'Organization Status';

            var maxSeqCnt = $('.GroupSeq_' + subgrpId).attr("data");
            //maxSeqCnt=1;
            var nxtSeq = parseInt(maxSeqCnt) + 1;
            toappendData = '<div class="multi-field-wrapper"><div class="multi-fields">';
            $.each(subGrpAttArr, function (key, element) {
                //alert (JSON.stringify(element));
                atributeId = element['AttributeMasterId'];

                var inpName = 'NewProductionField_' + atributeId + '_<?php echo $DependentMasterIds['ProductionField']; ?>_' + nxtSeq;
                var commendName = 'NewProductionField_' + atributeId + '_<?php echo $DependentMasterIds['Comments']; ?>_' + nxtSeq;
                var selName = 'NewProductionField_' + atributeId + '_<?php echo $DependentMasterIds['Disposition']; ?>_' + nxtSeq;
                //alert(inpName);
                toappendData += '<div id="MultiField_' + atributeId + '_' + nxtSeq + '" class="multi-field clearfix MultiField_' + atributeId + ' CampaignWiseFieldsDiv_' + groupId + '">' +
                        '<div class="form-group" style=""><p>' + element['DisplayAttributeName'] + '</p></div>' +
                        '<div class="form-group">' +
                        '<input type="text" class="form-control doOnBlur InsertFields" id="prodInput_' + atributeId + '" name="' + inpName + '">' +
                        '<span class="lighttext" data-toggle="tooltip" title=""></span>' +
                        '</div>' +
                        '<div class="form-group comments">' +
                        '<textarea rows="3" cols="50" class="form-control InsertFields" id="" name="' + commendName + '" placeholder="Comments"></textarea>' +
                        '</div>' +
                        '<div class="form-group status">' +
                        '<select id="" name="' + selName + '" class="form-control CampaignWiseSelDone_' + groupId + ' dispositionSelect InsertFields">' +
                        '<option value="">--</option>' +
                        '<option value="A">A</option>' +
                        '<option value="D">D</option>' +
                        '<option value="M">M</option>' +
                        '<option value="V">V</option>' +
                        '</select>' +
                        '</div>' +
                        '</div><br>';

            });

            toappendData += '</div><i class="fa fa-minus-circle remove-field" data="' + subgrpId + '" style="top:0px"></i></div><br>';
            //alert(toappendData);
            $('.addGrp_' + subgrpId).append(toappendData);
            $('.GroupSeq_' + subgrpId).attr("data", nxtSeq);

            Load_totalAttInThisGrpCnt();
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
            }
            else if (/.+@.+/.test(value)) {
                callback(true);
            }
            else {
                callback(false);
            }
        }, 1000);
    };

    UrlRegexp = /^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/;
    urlValidator = function (value, callback) {
        setTimeout(function () {
            if (UrlRegexp.test(value)) {
                callback(true);
            }
            else {
                callback(false);
            }
        }, 100);
    };

    var AlphbetOnlyReg = /^[a-zA-Z\s]+$/;
    AlphabetOnlyValidator = function (value, callback) {
        setTimeout(function () {
            if (AlphbetOnlyReg.test(value) == false) {
                callback(false);
            }
            else {
                callback(true);
            }
        }, 100);
    };
    var AlphaNumericOnlyReg = /^[a-zA-Z\s]+$/;
    AlphaNumericOnlyValidator = function (value, callback) {
        setTimeout(function () {
            if (AlphaNumericOnlyReg.test(value) == false) {
                callback(false);
            }
            else {
                callback(true);
            }
        }, 100);
    };
    var NumbersOnlyReg = /^[a-zA-Z\s]+$/;
    NumbersOnlyValidator = function (value, callback) {
        setTimeout(function () {
            if (NumbersOnlyReg.test(value) == false) {
                callback(false);
            }
            else {
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
    function loadhandsondatafinal(id, idval, key, keysub) {
        var ProductionEntityId = $("#ProductionEntity").val();
<<<<<<< .mine
        $.ajax({
            url: '<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'ajaxgetdatahand')); ?>',
            dataType: 'json',
            type: 'POST',
            data: {ProductionEntityId: ProductionEntityId, AttributeMasterId: id},
            success: function (res) {
                //alert(res);
                var data = [], row;
                for (var i = 0, ilen = res.handson.length; i < ilen; i++) {
                    row = [];
                    row[0] = res.handson[i].DataId;
                    var prodArr =<?php echo json_encode($ProductionFields); ?>;
                    var readArr = '';
                    var readArr =<?php
if (isset($ReadOnlyFields)) {
    echo json_encode($ReadOnlyFields);
} else {
    echo "''";
}
?>;
                    var cnt = 1;
                    if (typeof readArr != 'undefined') {
                        $.each(readArr, function (key, element) {
                            if (element['AttributeMasterId'] != '') {
                                elt = element['AttributeMasterId'];
                                row[cnt] = res.handson[i]['[' + elt + ']'];
                                cnt++;
                            }
                        });
                    }
                    $.each(prodArr, function (key, element) {
                        if (element['AttributeMasterId'] != '') {
                            elt = element['AttributeMasterId'];
                            row[cnt] = res.handson[i]['[' + elt + ']'];
                            cnt++;
                        }
                    });
                    data[res.handson[i].Id] = row;
                }
                hot.loadData(data);
||||||| .r23588
         $.ajax({
        url: '<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'ajaxgetdatahand')); ?>',
        dataType: 'json',
        type: 'POST',
        data: {ProductionEntityId: ProductionEntityId,AttributeMasterId: id},
        success: function (res) {
            //alert(res);
            var data = [], row;
            for (var i = 0, ilen = res.handson.length; i < ilen; i++) {
                row = [];
                row[0] = res.handson[i].DataId;
                var prodArr =<?php echo json_encode($ProductionFields); ?>;
                var readArr = '';
                var readArr =<?php if (isset($ReadOnlyFields)) {
    echo json_encode($ReadOnlyFields);
} else {
    echo "''";
} ?>;
                var cnt = 1;
                if (typeof readArr != 'undefined') {
                    $.each(readArr, function (key, element) {
                        if (element['AttributeMasterId'] != '') {
                            elt = element['AttributeMasterId'];
                            row[cnt] = res.handson[i]['[' + elt + ']'];
                            cnt++;
                        }
                    });
                }
                $.each(prodArr, function (key, element) {
                    if (element['AttributeMasterId'] != '') {
                        elt = element['AttributeMasterId'];
                        row[cnt] = res.handson[i]['[' + elt + ']'];
                        cnt++;
                    }
                });
                data[res.handson[i].Id] = row;
=======
         $.ajax({
        url: '<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'ajaxgetdatahand')); ?>',
        dataType: 'json',
        type: 'POST',
        data: {ProductionEntityId: ProductionEntityId,AttributeMasterId: id},
        success: function (res) {
            //alert(res);
            var data = [], row;
            var j =0;
            for (var i = 0, ilen = res.handson.length; i < ilen; i++) {
                row = [];
                row[0] = res.handson[i].DataId;
                row[1] = res.handson[i].AttributeValue;
                row[2] = res.handson[i].Id;
//                row[0] = res.handson[i].Id;
//                row[0] = res.handson[i].AttributeValue;

                data[res.handson[i].Id] = row;
>>>>>>> .r23591
                j++;
            }
<<<<<<< .mine
        });
        //alert(id);
        var attrsub = $("#attrsub" + idval + '_' + key + '_' + keysub).val();
        var attrdisp = $("#attrdisp" + id + '_' + idval + '_' + key + '_' + keysub).val();
        if (typeof attrsub === 'undefined' || typeof attrsub === '') {
            $("#exampleFillInHandsonModalTitle").text(attrdisp);
        } else {
            $("#exampleFillInHandsonModalTitle").text(attrsub);
||||||| .r23588
            hot.loadData(data);
=======
            //alert(data);
            hot.loadData(data);
>>>>>>> .r23591
        }
<<<<<<< .mine
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
            minSpareRows: 1,
            columnSorting: true,
            sortIndicator: true,
            manualColumnMove: true,
            stretchH: 'all',
            rowHeaders: true,
            manualRowResize: true,
            manualColumnResize: true,
            comments: false,
            contextMenu: ['undo', 'redo', 'make_read_only', 'alignment', 'remove_row'],
            colHeaders: [myattrid],
            columns: [
                {readOnly: true}],
            afterValidate: function (isValid, value, row, prop) {
                if (!isValid) {
                    $("#SubmitForm").hide();
                    alert("Data Entered is Invalid!");
                } else {
                    $("#SubmitForm").show();
||||||| .r23588
    });
        //alert(id);
        var attrsub = $("#attrsub"+idval+'_'+key+'_'+keysub).val();
        var attrdisp = $("#attrdisp"+id+'_'+idval+'_'+key+'_'+keysub).val();
        if(typeof attrsub==='undefined'|| typeof attrsub===''){
        $("#exampleFillInHandsonModalTitle").text(attrdisp);
    }else{
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
        minSpareRows: 1,
        columnSorting: true,
        sortIndicator: true,
        manualColumnMove: true,
        stretchH: 'all',
        rowHeaders: true,
        manualRowResize: true,
        manualColumnResize: true,
        comments: false,
        contextMenu: ['undo', 'redo', 'make_read_only', 'alignment', 'remove_row'],
        colHeaders: [myattrid],
        columns: [
            {readOnly: true}],
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

=======
    });
        //alert(id);
        var attrsub = $("#attrsub"+idval+'_'+key+'_'+keysub).val();
        var attrdisp = $("#attrdisp"+id+'_'+idval+'_'+key+'_'+keysub).val();
        if(typeof attrsub==='undefined'|| typeof attrsub===''){
        $("#exampleFillInHandsonModalTitle").text(attrdisp);
    }else{
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
        colWidths: 400,
        height: 520,
        minSpareCols: 0,
        minSpareRows: 1,
        columnSorting: true,
        sortIndicator: true,
        manualColumnMove: true,
        stretchH: 'all',
        rowHeaders: true,
        manualRowResize: true,
        manualColumnResize: true,
        comments: false,
        contextMenu: ['undo', 'redo', 'make_read_only', 'alignment', 'remove_row'],
        colHeaders: ['DataId','AttributeValue','Id'],
        columns: [
            {readOnly: true},
                        <?php
foreach ($ReadOnlyFields as $key => $val) {
        echo "{readOnly: true},";
}
?>
<?php
foreach ($ProductionFields as $key => $val) {
    $validationstx = '';
    if ($val['FunctionName'] != '') {
        $validationstx = ',validator: ' . $val['FunctionName'] . ', allowInvalid: false';
    }
    if ($val['ControlName'] == 'DropDownList') {
        if ($val['Optionsbut1'] === 'NO') {
            $test = '["--Select--"]';
        } else
            $test = $val['Optionsbut1'];


        echo "{ type: 'dropdown',source: $test},";
    }
    elseif ($val['ControlName'] == 'Auto') {
      //  echo "{ type: 'autocomplete',source: $test'},";
         $test = $val['Optionsbut1'];
       echo " {
        type: 'autocomplete',
        source: $test,
        strict: true
      },";
    } else
        echo "{type:'text' $validationstx},";
}
?>
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

>>>>>>> .r23591
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
            changed = changes.toString().split(",");
            var keyval = changed[1] - 1;
<?php
$temp = json_encode($ProductionFields);
echo "var production = " . $temp . ";\n";
?>


            $.ajax({
                url: '<?php echo Router::url(array('controller' => 'Getjobcore', 'action' => 'ajaxconvert')); ?>',
                dataType: 'json',
                type: 'POST',
                data: {keyval: keyval, changed: changed, production: production}, // contains changed cells' data
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

<?php ?>



        });



    }
</script>
<style>
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