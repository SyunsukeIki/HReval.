<template>
    <article>
        <h1 class="title">目標シートテンプレート<br><span v-if="editMode">編集</span><span v-else>詳細</span></h1>
        <div class="eval-sheet-content">           
            <section>
                <div class="start">
                <b-badge variant="info"><span class="badge-size">テンプレート名</span></b-badge>
                <b-form-input v-if="editMode" :value="templateName" class="input2"></b-form-input>
                <span v-else class="label-text">{{templateName}}</span>
                </div>
            </section>    
            <section :key="aim" v-for="aim in aims">
                <b-col cols="10">                 
                <div v-if="editMode" class="top">
                    <b-badge variant="info"><span class="badge-size">目標種別</span></b-badge>
                    <input type="radio" id="one" value="action" v-model="picked" name="aimkinds1" class="radiobutton">
                    <label for="one">行動目標</label>
                    <input type="radio" id="two" value="amount" v-model="picked" name="aimkinds1" class="radiobutton">
                    <label for="two">数値目標</label>
                </div>   
                <div v-else class="top">
                    <b-badge variant="info"><span class="badge-size">目標種別</span></b-badge>                 
                    <span class="label-text">{{aim.aimgroup}}</span>
                </div>
                </b-col>
                <hr>
                <div class="start">
                    <div v-if="editMode" class="start">
                        <b-badge variant="info"><span class="badge-size">分類</span></b-badge>
                        <div class="input2"><b-form-input :value="aim.aimkind"></b-form-input></div>
                    </div>
                    <div v-else class="start">
                        <b-badge variant="info"><span class="badge-size">分類</span></b-badge>
                        <span class="label-text">{{aim.aimkind}}</span>
                    </div>
                    <div v-if="editMode" class="start-left">
                        <b-badge variant="info"><span class="badge-size">ウエイト</span></b-badge>
                        <div class="input3"><b-form-input></b-form-input></div>
                    </div>
                    <div v-else class="start-left">
                        <b-badge variant="info"><span class="badge-size">ウエイト</span></b-badge>
                        <span class="label-text">{{aim.weight}}</span>
                    </div>
                </div>
                <div :key="aimcontent" v-for="aimcontent in aim.aimcontents">
                    <div class="sec-content">
                        <div class="item">
                            <b-row>
                                <b-col cols="15">
                                    <div class="start">
                                        <b-badge variant="info" ><span class="badge-size">項目名</span></b-badge>
                                        <b-form-input v-if="editMode" :value="aimcontent.aimTitle" class="input2"></b-form-input>
                                        <span v-else class="label-text">{{aimcontent.aimTitle}}</span>
                                    </div>
                                </b-col>  
                            </b-row>
                        </div> 
                        <b-badge variant="info" ><span class="badge-size">項目詳細</span></b-badge>
                        <div>
                            <b-form-textarea
                            v-if="editMode"
                            id="textarea"
                            :value="aimcontent.titleDetail"
                            rows="5"
                            max-rows="10"
                            class="input1"
                            ></b-form-textarea>
                            <p v-else class="label-text">{{aimcontent.titleDetail}}</p>
                        </div>  
                        <div v-if="editMode"  class="button1"><b-button variant="danger">項目削除</b-button></div>
                    </div>
                </div> 
                <div v-if="editMode"  class="button1"><b-button variant="primary">＋項目追加</b-button></div>
           </section>
            <div class="buttons" v-if="editMode">
                <b-button variant="success" ><div><a href="/templatedetail">戻る</a></div></b-button>
                <b-button variant="primary">保存</b-button>
            </div>
            <div class="buttons" v-else>
                <b-button variant="success" ><div><a href="/aimtemplatelist">戻る</a></div></b-button>
                <b-button variant="primary" @click="modeChange">編集</b-button>
                <b-button variant="danger">削除</b-button>
            </div>

        </div>
    </article>
</template>
<script>
  export default {
    name: 'template-detail',
  data() {
       return{
        editMode:false,
        templateName: '2021下期一般社員リーダー',
        aims:[
                {   
                    aimgroup:'行動目標',
                    aimkind:'リーダーに求める行動目標',
                    weight:50,
                    aimcontents:[
                        {aimTitle:'あいうえお', 
                        titleDetail:'あいうえお'},
                        {aimTitle:'かきくけこ',
                        titleDetail:'かきくけこ'}
                    ],
                 },
                {   
                    aimgroup:'数値目標',
                    aimkind:'リーダーに求める数値目標',
                    weight:50,
                    aimcontents:[
                        {aimTitle:'かきくけこ',
                         titleDetail:'さしすせそ'},
                    ],
                 },
            ],
      }
    },
    methods: {
        modeChange: function(){
        this.editMode = true
    },
  }
}

</script>

<style>

.title{
    font-family: 'Nunito Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    padding:10px;
    font-size: 32px;
    color: #636363;
    line-height: 46px;
}
.item{
    margin-bottom: 5px;
}
.item2{
    border: 1px solid #dbdbdc;
    border-radius: 5px;
    padding: 5px;
}
.badge-size{
    display: inline;
    font-size: 15px;
}
.badge-size2{
    margin-top: 2px;
}
.label-text{
  margin-top: 5px;
  margin-left:10px;
  margin-right:30px;
  color : #5f6368;
}
.buttons{
    display: flex;
    justify-content: flex-end;
    margin-top: 20px;
}
.buttons a{
    color: #fff;
}
.buttons a:hover{
    color: #fff;
}
.start{
    display: flex;
    justify-content: flex-start;
}
.start-left{
    display: flex;
    margin-left: 80px;
}
.top{
   display: flex;
   justify-content: flex-start;
   margin-top: 10px;
}
.radiobutton{
    width: 25px;
    height:25px;
    margin: 6px 5px 10px 30px;
    
}
.input2{
    margin :0 10px 2px 3px;
    
}
.input3{
    margin-left: 5px;
    width: 30%;
}
.button1{
    display: flex;
    justify-content: flex-end;
    margin-top: 10px;
}
</style>
