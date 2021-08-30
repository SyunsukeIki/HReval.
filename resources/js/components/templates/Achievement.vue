<template>
    <article>
        <section>
            <div class="sec-content">
                <b-button v-b-toggle="collapse_id" variant="primary" class="m-1" size="sm" pill>
                    <span class="when-open">－</span><span class="when-closed">＋</span>
                </b-button>
                <h3 class="phase-text">{{phase}}成果</h3>
                <b-badge variant="info"><span class="badge-size">登録日</span></b-badge><span class="label-text">2021/07/26</span>
                <span><b-button variant="outline-info" @click="edidEvent"><b-icon icon="pencil-fill"></b-icon> EDIT</b-button></span>
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
                                    <b-col cols="1"><b-badge variant="info"><span class="badge-size">自己評点</span></b-badge></b-col>
                                    <b-col cols="4"><span class="label-text">3</span></b-col>
                                    <b-col cols="2"><b-badge variant="info"><span class="badge-size">成果物ファイル</span></b-badge></b-col>
                                    <b-col cols="5"><span class="label-text">報告書(田中太郎).pdf</span><b-icon icon="download" font-scale = "1.5"></b-icon></b-col>
                                </b-row>
                                <div class="achieve-comment">
                                    <b-badge variant="info"><span class="badge-size">自己コメント</span></b-badge>
                                    <p class="comment-text">しっかりできていたと思う。</p>
                                </div>
                            </b-container>

                        <hr>
                        
                        <div class="items">
                            <b-container class="bv-example-row" >
                                <b-row align-h="start">
                                    <b-col><p class="item-name"><b-badge variant="info" class="mr-3"><span class="badge-size">項目名</span></b-badge>チームに貢献する</p></b-col>
                                </b-row>
                                <b-row align-h="start">
                                    <b-col cols="1"><b-badge variant="info"><span class="badge-size">項目内容</span></b-badge></b-col>
                                    <b-col cols="5"><p class="label-text">〇〇の資格を取る。</p></b-col>
                                </b-row>
                                <b-row align-h="start">
                                    <b-col cols="1"><b-badge variant="info"><span class="badge-size">自己評点</span></b-badge></b-col>
                                    <b-col cols="4"><span class="label-text">3</span></b-col>
                                    <b-col cols="2"><b-badge variant="info"><span class="badge-size">成果物ファイル</span></b-badge></b-col>
                                    <b-col cols="5"><span class="label-text">報告書(田中太郎).pdf</span><b-icon icon="download" font-scale = "1.5"></b-icon></b-col>
                                </b-row>
                                <div class="achieve-comment">
                                    <b-badge variant="info"><span class="badge-size">自己コメント</span></b-badge>
                                    <p class="comment-text">しっかりできていたと思う。</p>
                                </div>
                            </b-container>
                        </div>

                        <hr>

                        <div class="items">
                            <b-container class="bv-example-row" >
                                <b-row align-h="start">
                                    <b-col><p class="item-name"><b-badge variant="info" class="mr-3"><span class="badge-size">項目名</span></b-badge>チームに貢献する</p></b-col>
                                </b-row>
                                <b-row align-h="start">
                                    <b-col cols="1"><b-badge variant="info"><span class="badge-size">項目内容</span></b-badge></b-col>
                                    <b-col cols="5"><p class="label-text">〇〇の資格を取る。</p></b-col>
                                </b-row>
                                <b-row align-h="start">
                                    <b-col cols="1"><b-badge variant="info"><span class="badge-size">自己評点</span></b-badge></b-col>
                                    <b-col cols="4"><span class="label-text">3</span></b-col>
                                    <b-col cols="2"><b-badge variant="info"><span class="badge-size">成果物ファイル</span></b-badge></b-col>
                                    <b-col cols="5"><span class="label-text">報告書(田中太郎).pdf</span><b-icon icon="download" font-scale = "1.5"></b-icon></b-col>
                                </b-row>
                                <div class="achieve-comment">
                                    <b-badge variant="info"><span class="badge-size">自己コメント</span></b-badge>
                                    <p class="comment-text">しっかりできていたと思う。</p>
                                </div>
                            </b-container>
                        </div>

                        <hr>

                        <div class="items">
                            <b-container class="bv-example-row" >
                                <b-row align-h="start">
                                    <b-col><p class="item-name"><b-badge variant="info" class="mr-3"><span class="badge-size">項目名</span></b-badge>チームに貢献する</p></b-col>
                                </b-row>
                                <b-row align-h="start">
                                    <b-col cols="1"><b-badge variant="info"><span class="badge-size">項目内容</span></b-badge></b-col>
                                    <b-col cols="5"><p class="label-text">〇〇の資格を取る。</p></b-col>
                                </b-row>
                                <b-row align-h="start">
                                    <b-col cols="1"><b-badge variant="info"><span class="badge-size">自己評点</span></b-badge></b-col>
                                    <b-col cols="4"><span class="label-text">3</span></b-col>
                                    <b-col cols="2"><b-badge variant="info"><span class="badge-size">成果物ファイル</span></b-badge></b-col>
                                    <b-col cols="5"><span class="label-text">報告書(田中太郎).pdf</span><b-icon icon="download" font-scale = "1.5"></b-icon></b-col>
                                </b-row>
                                <div class="achieve-comment">
                                    <b-badge variant="info"><span class="badge-size">自己コメント</span></b-badge>
                                    <p class="comment-text">しっかりできていたと思う。</p>
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
                                <b-badge variant="info"><span class="badge-size">尺度</span></b-badge>
                                <p><b-table striped bordered outlined small fixed :items="items" :fields="fields"></b-table></p>
                            </b-container>
                            <b-container class="bv-example-row">
                                <b-row align-h="start">
                                    <b-col cols="1"><b-badge variant="info"><span class="badge-size">自己評点</span></b-badge></b-col>
                                    <b-col cols="4"><span class="label-text">3</span></b-col>
                                    <b-col cols="2"><b-badge variant="info"><span class="badge-size">成果物ファイル</span></b-badge></b-col>
                                    <b-col cols="5"><span class="label-text">報告書(田中太郎).pdf</span><b-icon icon="download" font-scale = "1.5"></b-icon></b-col>
                                </b-row>
                                <div class="achieve-comment">
                                    <b-badge variant="info"><span class="badge-size">自己コメント</span></b-badge>
                                    <p class="comment-text">しっかりできていたと思う。</p>
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
        name: 'achievement',
        props:['phase','collapse_id'],
        data() {
            return {
                fields: [{ key: 'level', label: '段階' },{ key: 'achievement', label: '達成率' }],
                items: [
                { level: 1, achievement: '25%' },
                { level: 2, achievement: '40%' },
                { level: 3, achievement: '50%' },
                { level: 4, achievement: '60%' },
                { level: 5, achievement: '80%' },
                { level: 6, achievement: '100%' }
                ]
            }
        },
        methods:{
            edidEvent(){
                this.$emit('edit-event')
            },
        }
    };
</script>


<style>

.phase-text {
    display: inline;
    vertical-align: middle;
    margin: 0 15px;
    font-size: 20px;
    color: #526A9B;
    font-weight: bolder;
}


.comment-text {
    border: 1px solid #dbdbdc;
    border-radius: 5px;
    display: flex;
    align-items: baseline;
    padding: 10px;
    height: 100px;
}

.achieve-comment {
    margin-top: 15px;
}

.item-name {
  border-bottom: solid 3px #C1D3E0;
  position: relative;
  color: #5f6368;
  font-size: 18px;
}

.item-name:after {
  position: absolute;
  content: " ";
  display: block;
  border-bottom: solid 3px #526A9B;
  bottom: -3px;
  width: 20%;
}

</style>