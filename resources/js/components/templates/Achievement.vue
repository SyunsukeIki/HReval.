<template>
    <article>
        <section>
            <div>
                <b-button v-b-toggle="collapse_id" variant="primary">+</b-button>
                <h3>フェーズ：{{phase}}</h3>
                <span><b-button variant="outline-info" pill @click="edidEvent"><b-icon icon="pencil-fill"></b-icon></b-button></span>
                <b-collapse :id=collapse_id class="mt-2">
                    <b-card>
                        <h4 class="theme">行動目標</h4>
                        <b-container class="bv-example-row">
                            <b-row align-h="start">
                                <b-col cols="1"><b-badge pill variant="info">項目名</b-badge></b-col>
                                <b-col cols="5"><p class="label-text">在籍年数毎に求めるもの</p></b-col>
                            </b-row>
                            <b-row align-h="start">
                                <b-col cols="1"><b-badge pill variant="info">内容</b-badge></b-col>
                                <b-col cols="5"><p class="label-text">〇〇の資格を取る。</p></b-col>
                            </b-row>
                            <b-row align-h="start">
                                <b-col cols="5"><b-badge pill variant="info">自己評点</b-badge><span class="label-text">3</span></b-col>
                                <b-col cols="7"><b-badge pill variant="info">成果物ファイル</b-badge><span class="label-text">報告書(田中太郎).pdf</span><b-icon icon="file-earmark-text"></b-icon></b-col>
                            </b-row>
                            <div class="comment">
                                <b-badge pill variant="info">自己コメント</b-badge>
                                <p class="comment-text">しっかりできていたと思う。</p>
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
                                <b-col cols="5"><b-badge pill variant="info">自己評点</b-badge><span class="label-text">3</span></b-col>
                                <b-col cols="7"><b-badge pill variant="info">成果物ファイル</b-badge><span class="label-text">報告書(田中太郎).pdf</span><b-icon icon="file-earmark-text"></b-icon></b-col>
                            </b-row>
                            <div class="comment">
                                <b-badge pill variant="info">自己コメント</b-badge>
                                <p class="comment-text">しっかりできていたと思う。</p>
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
                            <b-badge pill variant="info">尺度</b-badge>
                            <p><b-table striped bordered outlined small fixed :items="items" :fields="fields"></b-table></p>
                        </b-container>
                        <b-container class="bv-example-row">
                            <b-row align-h="start">
                                <b-col cols="5"><b-badge pill variant="info">自己評点</b-badge><span class="label-text">4</span></b-col>
                                <b-col cols="4"><b-badge pill variant="info">成果物ファイル</b-badge><span class="label-text">file.xlsx</span></b-col>
                            </b-row>
                            <div class="comment">
                                <b-badge pill variant="info">自己コメント</b-badge>
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
</style>