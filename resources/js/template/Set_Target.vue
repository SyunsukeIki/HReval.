<template>
    <article>
        <section>
            <b-container class="bv-example-row">
                <b-row align-h="between">
                    <b-col cols="3"><h4>行動目標</h4></b-col>
                    <b-col cols="2">
                        <div>
                            <b-dropdown id="dropdown-1" text="承認" class="m-md-2">
                                <b-dropdown-item>承認</b-dropdown-item>
                                <b-dropdown-item>差戻</b-dropdown-item>
                            </b-dropdown>
                        </div>
                    </b-col>
                </b-row>
                <b-row align-h="start">
                    <b-col cols="5"><b-badge pill variant="info">分類</b-badge><span class="label-text">リーダーに求めるもの</span></b-col>
                    <b-col cols="2"><b-badge pill variant="info">ウエイト</b-badge><span class="label-text">50</span></b-col>
                </b-row>
            </b-container>
        </section>

        <hr>

        <first-target-sec />
        <second-target-sec />

        <hr>

        <section>
            <b-container class="bv-example-row">
                <b-row align-h="start">
                    <b-col cols="3"><h4 class="num-theme">数値目標</h4></b-col>
                </b-row>
                <b-row align-h="start">
                    <b-col cols="5"><b-badge pill variant="info">分類</b-badge><span class="label-text">リーダーに求めるもの</span></b-col>
                    <b-col cols="4"><b-badge pill variant="info">ウエイト</b-badge><span class="label-text">50</span></b-col>
                </b-row>
            </b-container>
        </section>

        <hr>

        <num-target-sec />
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
    color: #5f6368;
    padding: 1rem 4rem;
    border: 1px solid #dbdbdc;
}

hr {
    color: #dbdbdc;
}

.num-theme {
    margin-bottom: 10px;
}

</style>