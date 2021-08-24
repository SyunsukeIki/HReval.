<template>
    <article>
        <section>
            <b-container class="bv-example-row">
                <b-row align-h="between">
                    <b-col cols="3"><h4 class="sub-heading">行動目標</h4></b-col>
                    <b-col cols="1">
                        <div>
                            <b-dropdown variant="primary" id="dropdown-1" text="承認" >
                                <b-dropdown-item>承認</b-dropdown-item>
                                <b-dropdown-item>差戻</b-dropdown-item>
                            </b-dropdown>
                        </div>
                    </b-col>
                </b-row>
                <b-row align-h="start">
                    <b-col cols="5"><b-badge variant="info"><span class="badge-size">分類</span></b-badge><span class="label-text">リーダーに求めるもの</span></b-col>
                    <b-col cols="4"><b-badge variant="info"><span class="badge-size">ウエイト</span></b-badge><span class="label-text">50</span></b-col>
                </b-row>
            </b-container>
        </section>

        <!-- 行動目標の目標項目 -->
        <first-target-sec />
        <second-target-sec />

        <hr>

        <section>
            <b-container class="bv-example-row">
                <b-row align-h="start">
                    <b-col cols="3"><h4 class="sub-heading">数値目標</h4></b-col>
                </b-row>
                <b-row align-h="start">
                    <b-col cols="5"><b-badge variant="info"><span class="badge-size">分類</span></b-badge><span class="label-text">リーダーに求めるもの</span></b-col>
                    <b-col cols="4"><b-badge variant="info"><span class="badge-size">ウエイト</span></b-badge><span class="label-text">50</span></b-col>
                </b-row>
            </b-container>
        </section>
        
        <!-- 数値目標の目標項目 -->
        <num-target-sec />

        <!-- 下部ボタン -->
        <div class="bottom-btn">
            <p class="save-btn"><b-button variant="primary">保存</b-button></p>
            <p class="request-btn"><b-button variant="primary">承認依頼</b-button></p>
        </div>
    </article>
</template>

<script>
    import FirstTargetSec from './First_target_sec.vue';
    import SecondTargetSec from './Second_target_sec.vue';
    import NumTargetSec from './Num_target_sec.vue';
    import '../../../css/evaluation_sheet.css';

    export default {
        name: 'set-target',
        components: {FirstTargetSec, SecondTargetSec, NumTargetSec},
    };
</script>

