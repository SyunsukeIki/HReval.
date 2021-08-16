<template>
    <article>
        <section>
            <b-container class="bv-example-row">
                <b-row align-h="between">
                    <b-col cols="3"><h4 class="theme">行動目標</h4></b-col>
                </b-row>
                <b-row align-h="start">
                    <b-col cols="5"><b-badge pill variant="info">分類</b-badge><span class="label-text">リーダーに求めるもの</span></b-col>
                    <b-col cols="4"><b-badge pill variant="info">ウエイト</b-badge><span class="label-text">50</span></b-col>
                </b-row>
            </b-container>
        </section>

        <hr>

        <!-- 行動目標の目標項目 -->
        <first-target-sec />
        <advice-button />

        <second-target-sec />
        <advice-button />

        <hr>

        <section>
            <b-container class="bv-example-row">
                <b-row align-h="start">
                    <b-col cols="3"><h4 class="theme">数値目標</h4></b-col>
                </b-row>
                <b-row align-h="start">
                    <b-col cols="5"><b-badge pill variant="info">分類</b-badge><span class="label-text">リーダーに求めるもの</span></b-col>
                    <b-col cols="4"><b-badge pill variant="info">ウエイト</b-badge><span class="label-text">50</span></b-col>
                </b-row>
            </b-container>
        </section>

        <hr>

        <!-- 数値目標の目標項目 -->
        <num-target-sec />
        <advice-button />
    </article>

</template>


<script>
    import FirstTargetSec from './First_target_sec.vue';
    import SecondTargetSec from './Second_target_sec.vue';
    import NumTargetSec from './Num_target_sec.vue';
    import AdviceButton from './AdviceButton.vue';

    export default {
        name: 'mid-interview',
        
        components: {FirstTargetSec, SecondTargetSec, NumTargetSec, AdviceButton},
    };
</script>

<style>
.memo {
    display: inline-block;
}


.sec-content {
    margin: 15px;
}

.sec-name {
    margin: 0 30px 0 10px;
}

article {
    padding: 20px;
    margin: 15px;
    border: 1px solid #dbdbdc;

}

h4 {
    padding: 0.25em 0.5em;/*上下 左右の余白*/
    color: #17a2b8;/*文字色*/
    background: transparent;/*背景透明に*/
    border-left: solid 5px #7db4e6;/*左線*/
    font-size: 20px;
    margin-bottom: 15px;
}

hr {
    color: #dbdbdc;
}

.num-theme {
    margin-bottom: 10px;
}


</style>