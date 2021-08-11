<template>
    <article>
        <section class="theme">
            <p>行動目標</p>
            <p><b-badge pill>分類</b-badge>リーダーに求めるもの</p><p><b-badge pill>ウエイト</b-badge>50</p>
        </section>
        <div>
            <b-dropdown id="dropdown-1" text="承認" class="m-md-2">
                <b-dropdown-item>First Action</b-dropdown-item>
                <b-dropdown-item>Second Action</b-dropdown-item>
                <b-dropdown-item>Third Action</b-dropdown-item>
                <b-dropdown-divider></b-dropdown-divider>
                <b-dropdown-item active>Active action</b-dropdown-item>
                <b-dropdown-item disabled>Disabled action</b-dropdown-item>
            </b-dropdown>
        </div>

        <first-target-sec />
        <second-target-sec />

        <section class="theme">
            <p>数値目標</p>
            <p><b-badge pill>分類</b-badge>リーダーに求めるもの</p><p><b-badge pill>ウエイト</b-badge>50</p>
        </section>

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

.memo-area {
    border: 0.1px solid gray;
}
.sec-name {
    font-weight: bold;
}

.sec-content {
    margin-top: 15px;
}

article {
    border: 0.5px solid gray;
    padding: 10px;
    margin: 30px;
}
</style>