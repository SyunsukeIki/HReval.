<template>
    <article class="eval-sheet-content">
        <section>
            <h4 class="sub-heading">行動目標</h4>
            <b-container class="bv-example-row">
                <b-row align-h="start">
                    <b-col cols="5"><b-badge variant="info"><span class="badge-size">分類</span></b-badge><span class="label-text">リーダーに求めるもの</span></b-col>
                    <b-col cols="4"><b-badge variant="info"><span class="badge-size">ウエイト</span></b-badge><span class="label-text">50</span></b-col>
                </b-row>
            </b-container>
        </section>
        <hr>
        <!-- 行動目標の目標項目 -->
        <first-target-sec />
        <div class="bottom-btn">
            <advice-button input_modal_id="first_advice_input" disp_modal_id="first_advice_disp" />
        </div>
        <second-target-sec />
        <div class="bottom-btn">
            <advice-button input_modal_id="second_advice_input" disp_modal_id="second_advice_disp"/>
        </div>

        <hr>

        <section>
            <h4 class="sub-heading">数値目標</h4>
            <b-container class="bv-example-row">
                <b-row align-h="start">
                    <b-col cols="5"><b-badge variant="info"><span class="badge-size">分類</span></b-badge><span class="label-text">リーダーに求めるもの</span></b-col>
                    <b-col cols="4"><b-badge variant="info"><span class="badge-size">ウエイト</span></b-badge><span class="label-text">50</span></b-col>
                </b-row>
            </b-container>
        </section>
        <hr>
        <!-- 数値目標の目標項目 -->
        <num-target-sec />
        <div class="bottom-btn">
            <advice-button input_modal_id="num_advice_input" disp_modal_id="num_advice_disp"/>
        </div>
    </article>
</template>


<script>
    import FirstTargetSec from './First_target_sec.vue';
    import SecondTargetSec from './Second_target_sec.vue';
    import NumTargetSec from './Num_target_sec.vue';
    import AdviceButton from '../atoms/AdviceButton.vue';
    import '../../../css/evaluation_sheet.css';

    export default {
        name: 'mid-interview',
        
        components: {FirstTargetSec, SecondTargetSec, NumTargetSec, AdviceButton},
    };
</script>

