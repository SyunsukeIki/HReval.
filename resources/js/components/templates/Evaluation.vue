<template>
    <article>
        <section>
            <div class="sec-content">
                <b-button v-b-toggle="collapse_id" variant="primary" class="m-1" size="sm" pill>
                    <span class="when-open">－</span><span class="when-closed">＋</span>
                </b-button>
                <p class="evaluation-num">{{evaluation_num}}評価</p>
                <b-badge variant="info"><span class="badge-size">評価者</span></b-badge><span class="label-text">山田花子</span>
                <b-badge variant="info"><span class="badge-size">登録日</span></b-badge><span class="label-text">2021/07/26</span>
                <span class="eval-dropdown">
                    <b-dropdown variant="info" id="dropdown-1" text="承認" class="m-md-2">
                        <b-dropdown-item>承認</b-dropdown-item>
                        <b-dropdown-item>差戻</b-dropdown-item>
                    </b-dropdown>
                </span>
                <b-button variant="outline-info" @click="edidEvent"><b-icon icon="pencil-fill"></b-icon> EDIT</b-button>
                <b-collapse :id=collapse_id class="mt-2">
                    <b-card class="mt-2">
                        <h4 class="sub-heading">行動目標</h4>
                            <b-container class="bv-example-row">
                                <b-row align-h="start">
                                    <b-col><p class="item-name"><b-badge variant="info" class="mr-3"><span class="badge-size">項目名</span></b-badge>在籍年数毎に求めるもの</p></b-col>
                                </b-row>
                                <b-row align-h="start">
                                    <b-col cols="1"><b-badge variant="info"><span class="badge-size">項目内容</span></b-badge></b-col>
                                    <b-col cols="5"><p class="label-text">〇〇の資格を取る。</p></b-col>
                                </b-row>
                                <b-row align-h="start">
                                    <b-col cols="1"><b-badge variant="info"><span class="badge-size">{{ count_sm }}次評点</span></b-badge></b-col>
                                    <b-col cols="4"><p class="label-text">3</p></b-col>
                                </b-row>
                                <div>
                                    <b-badge variant="info"><span class="badge-size">{{ count_sm }}次コメント</span></b-badge>
                                    <p class="comment-text">いいと思います。</p>
                                </div>
                            </b-container>

                        <hr>

                        <div class="items">
                            <b-container class="bv-example-row">
                                <b-row align-h="start">
                                    <b-col><p class="item-name"><b-badge variant="info" class="mr-3"><span class="badge-size">項目名</span></b-badge>チームに貢献する</p></b-col>
                                </b-row>
                                <b-row align-h="start">
                                    <b-col cols="1"><b-badge variant="info"><span class="badge-size">項目内容</span></b-badge></b-col>
                                    <b-col cols="5"><p class="label-text">〇〇の資格を取る。</p></b-col>
                                </b-row>
                                <b-row align-h="start">
                                    <b-col cols="1"><b-badge variant="info"><span class="badge-size">{{ count_sm }}次評点</span></b-badge></b-col>
                                    <b-col cols="4"><p class="label-text">3</p></b-col>
                                </b-row>
                                <div>
                                    <b-badge variant="info"><span class="badge-size">{{ count_sm }}次コメント</span></b-badge>
                                    <p class="comment-text">いいと思います。</p>
                                </div>
                            </b-container>
                        </div>

                        <hr>

                        <div class="items">
                            <b-container class="bv-example-row">
                                <b-row align-h="start">
                                    <b-col><p class="item-name"><b-badge variant="info" class="mr-3"><span class="badge-size">項目名</span></b-badge>在籍年数毎に求めるもの</p></b-col>
                                </b-row>
                                <b-row align-h="start">
                                    <b-col cols="1"><b-badge variant="info"><span class="badge-size">項目内容</span></b-badge></b-col>
                                    <b-col cols="5"><p class="label-text">〇〇の資格を取る。</p></b-col>
                                </b-row>
                                <b-row align-h="start">
                                    <b-col cols="1"><b-badge variant="info"><span class="badge-size">{{ count_sm }}次評点</span></b-badge></b-col>
                                    <b-col cols="4"><p class="label-text">3</p></b-col>
                                </b-row>
                                <div>
                                    <b-badge variant="info"><span class="badge-size">{{ count_sm }}次コメント</span></b-badge>
                                    <p class="comment-text">いいと思います。</p>
                                </div>
                            </b-container>
                        </div>

                        <hr>

                        <div class="items">
                            <b-container class="bv-example-row">
                                <b-row align-h="start">
                                    <b-col><p class="item-name"><b-badge variant="info" class="mr-3"><span class="badge-size">項目名</span></b-badge>在籍年数毎に求めるもの</p></b-col>
                                </b-row>
                                <b-row align-h="start">
                                    <b-col cols="1"><b-badge variant="info"><span class="badge-size">項目内容</span></b-badge></b-col>
                                    <b-col cols="5"><p class="label-text">〇〇の資格を取る。</p></b-col>
                                </b-row>
                                <b-row align-h="start">
                                    <b-col cols="1"><b-badge variant="info"><span class="badge-size">{{ count_sm }}次評点</span></b-badge></b-col>
                                    <b-col cols="4"><p class="label-text">3</p></b-col>
                                </b-row>
                                <div>
                                    <b-badge variant="info"><span class="badge-size">{{ count_sm }}次コメント</span></b-badge>
                                    <p class="comment-text">いいと思います。</p>
                                </div>
                            </b-container>
                        </div>
                    </b-card>

                    <b-card class="mt-2">
                        <h4 class="sub-heading">数値目標</h4>
                        <b-container class="bv-example-row">
                            <b-row align-h="start">
                                <b-col><p class="item-name"><b-badge variant="info" class="mr-3"><span class="badge-size">項目名</span></b-badge>売上達成率</p></b-col>
                            </b-row>
                            <b-row align-h="start">
                                <b-col cols="1"><b-badge variant="info"><span class="badge-size">{{ count_sm }}次評点</span></b-badge></b-col>
                                <b-col cols="4"><p class="label-text">3</p></b-col>
                            </b-row>
                            <div>
                                <b-badge variant="info"><span class="badge-size">{{ count_sm }}次コメント</span></b-badge>
                                <p class="comment-text">もう少し頑張ってください。</p>
                            </div>
                        </b-container>
                    </b-card>
                </b-collapse>
            </div>
        </section>
    </article>
</template>


<script>
    import '../../../css/evaluation_sheet.css';
    export default {
        name: 'evaluation',
        props:['evaluation_num','collapse_id','count_sm'],
        methods:{
            edidEvent(){
                this.$emit('edit-event')
            },
        }
    };

</script>


<style>
h3 {
    display: inline;
    vertical-align: middle;
    margin: 0 15px 0 15px;

}

.evaluation-num {
    display: inline;
    vertical-align: middle;
    color: #526A9B;
    border-radius: 5px;
    margin: 0 15px;
    font-size: 20px;
    font-weight: bolder;
}


</style>