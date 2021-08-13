<template>
    <article>
        <section>
            <b-container class="bv-example-row">
                <b-row align-h="between">
                    <b-col cols="3"><h4 class="theme">行動目標</h4></b-col>
                    <b-col cols="2">
                        <div>
                            <b-dropdown variant="primary" id="dropdown-1" text="承認" class="m-md-2">
                                <b-dropdown-item>承認</b-dropdown-item>
                                <b-dropdown-item>差戻</b-dropdown-item>
                            </b-dropdown>
                        </div>
                    </b-col>
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
        <second-target-sec />

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

        <!-- 下部ボタン -->
        <b-container class="bv-example-row">
            <b-row align-h="end">
                <b-col cols="3"><b-button  variant="info">保存</b-button>
                <span><b-button variant="info">承認依頼</b-button></span>
                </b-col>
            </b-row>
        </b-container>
    </article>

</template>

<script>
    import FirstTargetSec from './First_target_sec.vue';
    import SecondTargetSec from './Second_target_sec.vue';
    import NumTargetSec from './Num_target_sec.vue';

    export default {
        name: 'set_target',
        components: {FirstTargetSec, SecondTargetSec, NumTargetSec},
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