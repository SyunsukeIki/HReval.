<template>
    <article>
        <section>
            <div>
                <b-container class="bv-example-row">
                    <b-row>
                        <b-col cols="2"><b-button v-b-toggle.collapse-1 variant="primary">+</b-button><p class="evaluation-num">一次評価</p></b-col>
                        <b-col cols="2"><b-badge pill variant="info">評価者</b-badge><span>山田花子</span></b-col>
                        <b-col cols="2"><b-badge pill variant="info">登録日</b-badge><span>2021/07/26</span></b-col>
                        <b-col cols="2"><b-button variant="outline-info" pill><b-icon icon="pencil-fill"></b-icon></b-button></b-col>
                    </b-row>
                </b-container>
                <b-collapse id="collapse-1" class="mt-2">
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
                                <b-col cols="1"><b-badge pill variant="info">項目名</b-badge></b-col>
                                <b-col cols="5"><p class="label-text">在籍年数毎に求めるもの</p></b-col>
                            </b-row>
                            <b-row align-h="start">
                                <b-col cols="1"><b-badge pill variant="info">内容</b-badge></b-col>
                                <b-col cols="5"><p class="label-text">〇〇の資格を取る。</p></b-col>
                            </b-row>
                            <b-row align-h="start">
                                <b-col cols="1"><b-badge pill variant="info">一次評点</b-badge></b-col>
                                <b-col cols="5"><p class="label-text">3</p></b-col>
                            </b-row>
                            <div class="comment">
                                <b-badge pill variant="info">一次コメント</b-badge>
                                <p class="comment-text">いいと思います。</p>
                            </div>
                        </b-container>

                        <hr>

                        <b-container class="bv-example-row">
                            <b-row align-h="start">
                                <b-col cols="1"><b-badge pill variant="info">項目名</b-badge></b-col>
                                <b-col cols="5"><p class="label-text">チームに貢献する</p></b-col>
                            </b-row>
                            <b-row align-h="start">
                                <b-col cols="1"><b-badge pill variant="info">内容</b-badge></b-col>
                                <b-col cols="5"><p class="label-text">〇〇の資格を取る。</p></b-col>
                            </b-row>
                            <b-row align-h="start">
                                <b-col cols="1"><b-badge pill variant="info">一次評点</b-badge></b-col>
                                <b-col cols="5"><p class="label-text">3</p></b-col>
                            </b-row>
                            <div class="comment">
                                <b-badge pill variant="info">一次コメント</b-badge>
                                <p class="comment-text">いいと思います。</p>
                            </div>
                        </b-container>
                    </b-card>

                    <b-card>
                        <h4 class="theme">数値目標</h4>
                        <b-container class="bv-example-row">
                            <b-row align-h="start">
                                <b-col cols="1"><b-badge pill variant="info">項目名</b-badge></b-col>
                                <b-col cols="5"><p class="label-text">売上達成率</p></b-col>
                            </b-row>
                            <b-row align-h="start">
                                <b-col cols="1"><b-badge pill variant="info">一次評点</b-badge></b-col>
                                <b-col cols="5"><p class="label-text">3</p></b-col>
                            </b-row>
                            <div class="comment">
                                <b-badge pill variant="info">一次コメント</b-badge>
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
    export default {
        name: 'evaluation',
    };
</script>


<style>
h3 {
    display: inline;
    vertical-align: middle;
    margin: 0 15px 0 15px;

}

.comment-text {
    border: 1px solid #dbdbdc;
    height: 150px;
    display: flex;
    align-items: baseline;
}

.comment {
    margin-top: 15px;
}

.evaluation-num {
    display: inline;
    border: 3px solid #7b98e3;
    color: #7b98e3;
    padding: 5px;
    border-radius:10px;
    margin-left: 20px;
}
</style>