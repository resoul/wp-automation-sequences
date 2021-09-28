<?php
/**
 * @var $screen object
*/
?>

<div id="dataflow-navigation">
	<div class="nav-holder">
		<div class="left">
			<button id="back-button"></button>
		</div>
		<div class="center">
			<h2>Your automation</h2>
			<h3>Marketing automation</h3>
		</div>
		<div class="right">
			<button id="discard-button">Discard</button>
			<button id="publish-button">Publish to site</button>
		</div>
	</div>
</div>
<style>
    .post-type-automation-sequences #wpcontent {
        padding-left: 0;
    }
    .post-type-automation-sequences #screen-meta-links {
        position: relative;
        z-index: 666;
    }
    #dataflow-navigation {
        background-color: #fff;
        box-shadow: 0 1px 0 rgba(200, 215, 225, 0.5), 0 1px 2px #e9eff3;
    }
    #dataflow-navigation .nav-holder {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 15px;
        padding-left: 15px;
        padding-bottom: 15px;
    }
    #dataflow-navigation .left #back-button {
        width: 40px;
        height: 40px;
        border-radius: 100px;
        background-color: #F1F4FC;
        text-align: center;
        display: inline-block;
        vertical-align: top;
        border: 0;
        position: relative;
        cursor: pointer;
    }
    #dataflow-navigation .left #back-button:after {
        width: 10px;
        height: 14px;
        content: '';
        background: url("img/arrow.svg");
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        position: absolute;
    }
    #dataflow-navigation .center h2 {
        font-weight: 500;
        font-size: 16px;
        color: #393C44;
        margin: 0 0 5px;
    }
    #dataflow-navigation .center h3 {
        color: #808292;
        font-size: 14px;
        margin: 0;
    }
    #dataflow-navigation .right #publish-button,
    #dataflow-navigation .right #discard-button {
        font-weight: 500;
        font-size: 14px;
        border-radius: 5px;
        text-align: center;
        line-height: 38px;
        display: inline-block;
        vertical-align: top;
        transition: all .2s cubic-bezier(.05,.03,.35,1);
        width: 95px;
        height: 38px;
        border: 0;
        cursor: pointer;
    }
    #dataflow-navigation .right #discard-button {
        color: #A6A6B3;
    }
    #dataflow-navigation .right #publish-button {
        color: #FFF;
        background-color: #217CE8;
        width: 143px;
        margin-left: 10px;
    }
    #dataflow-navigation .right #publish-button:hover,
    #dataflow-navigation .right #discard-button:hover {
        opacity: .7;
    }
</style>