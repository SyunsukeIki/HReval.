<template>
    <article>
        <section>
            <h4 class="theme">目標方針</h4>
            <p class="policy-text">前年より売上の数値を意識して目標に反映させる</p>
        </section>
    </article>

</template >


<script>
    export default {
        name: 'policy',
    };
</script>


<style>

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

.policy-text {
    border: 1px solid #dbdbdc;
    height: 100px;
}

</style>