<template>
        <article>
            <h1 class="title">目標シートテンプレート<br>新規作成</h1>
            <div class="top-content">
                <span class="badge badge-info"><span class="badge-size">テンプレート名</span></span>
                <div class="input1">
                    <b-form-input v-model="text" placeholder="テンプレート名を入力してください"></b-form-input>
                </div>
            </div>
            <div class="sec-content">
                <div class="top">
                    <h4 class="sub-heading">目標種別</h4>
                    <input type="radio" id="one" value="action" v-model="picked" name="aimkinds1" class="radiobutton">
                    <label for="one">行動目標</label>
                    <input type="radio" id="two" value="amount" v-model="picked" name="aimkinds1" class="radiobutton">
                    <label for="two">数値目標</label>
                </div>
                <div class="item1">
                            <b-badge variant="info" ><span class="badge-size">分類名</span></b-badge>
                            <div class="input2">
                                <b-form-input v-model="text" placeholder="分類名を入力してください" class="input2"></b-form-input>
                            </div>
                            <b-badge variant="info"><span class="badge-size" >ウェイト</span></b-badge>
                            <div class="input3">
                                <b-form-input v-model="text" ></b-form-input>
                            </div>                           
                </div>                     
                <div class="third-content">
                        <div class="item2">
                            <div class="item1">
                                <b-badge variant="info" ><span class="badge-size">項目名</span></b-badge>
                                <div class="input2">
                                    <b-form-input v-model="text" placeholder="項目名を入力してください" class="input2"></b-form-input>
                                </div>
                            </div>
                            <div class="item1">
                                <b-badge variant="info"><span class="badge-size" >詳細</span></b-badge>
                                <b-form-textarea
                                id="textarea"
                                v-model="text"
                                placeholder="詳細を入力してください"
                                rows="5"
                                max-rows="10"
                                class="input1"
                                ></b-form-textarea>
                                <pre class="mt-3 mb-0">{{ text }}</pre>
                            </div>
                        </div>
                        <div class="deletebutton"><b-button>項目削除</b-button></div>        
                </div>              
                <div class="third-content">
                        <div class="item2">
                            <div class="item1">
                                <b-badge variant="info" ><span class="badge-size">項目名</span></b-badge>
                                <div class="input2">
                                    <b-form-input v-model="text" placeholder="項目名を入力してください" class="input2"></b-form-input>
                                </div>
                            </div>
                            <div class="item1">
                                <b-badge variant="info"><span class="badge-size" >詳細</span></b-badge>
                                <b-form-textarea
                                id="textarea"
                                v-model="text"
                                placeholder="詳細を入力してください"
                                rows="5"
                                max-rows="10"
                                class="input1"
                                ></b-form-textarea>
                                <pre class="mt-3 mb-0">{{ text }}</pre>
                            </div>
                        </div>
                        <div class="deletebutton"><b-button>項目削除</b-button></div>        
                </div>
                <div class="newbutton"><b-button variant="primary">項目追加</b-button></div>
            </div>
            <div class="sec-content">
                <div class="top">
                    <h4 class="sub-heading">目標種別</h4>
                    <input type="radio" id="one" value="action" v-model="picked" name="aimkinds2" class="radiobutton">
                    <label for="one">行動目標</label>
                    <input type="radio" id="two" value="amount" v-model="picked" name="aimkinds2" class="radiobutton">
                    <label for="two">数値目標</label>
                </div>
                <div class="item1">
                            <b-badge variant="info" ><span class="badge-size">分類名</span></b-badge>
                            <div class="input2">
                                <b-form-input v-model="text" placeholder="分類名を入力してください" class="input2"></b-form-input>
                            </div>
                            <b-badge variant="info"><span class="badge-size" >ウェイト</span></b-badge>
                            <div class="input3">
                                <b-form-input v-model="text" ></b-form-input>
                            </div>                           
                </div>
                <div class="third-content">
                        <div class="item2">
                            <div class="item1">
                                <b-badge variant="info" ><span class="badge-size">項目名</span></b-badge>
                                <div class="input2">
                                    <b-form-input v-model="text" placeholder="項目名を入力してください" class="input2"></b-form-input>
                                </div>
                            </div>
                            <div class="item1">
                                <b-badge variant="info"><span class="badge-size" >詳細</span></b-badge>
                                <b-form-textarea
                                id="textarea"
                                v-model="text"
                                placeholder="詳細を入力してください"
                                rows="5"
                                max-rows="10"
                                class="input1"
                                ></b-form-textarea>
                                <pre class="mt-3 mb-0">{{ text }}</pre>
                            </div>
                        </div>
                        <div class="deletebutton"><b-button>項目削除</b-button></div>        
                </div>
                <div class="newbutton"><b-button variant="primary">項目追加</b-button></div>
            </div>
            <div class="buttons">
                <div class="save-button"><b-button variant="primary">保存</b-button></div>
                <b-button variant="success" ><div class="backbutton"><a href="/aimtemplatelist">戻る</a></div></b-button>
            </div>
        </article>
</template>

<script>
  export default {
    name: 'new-aimtemplate',

  }
</script>

<style>
article{
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin-bottom: 50px;
}
.title{
    font-family: 'Nunito Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    margin-top : 25px;
    padding:10px;
    font-size: 32px;
    color: #636363;
    line-height: 46px;
}

.top-content{
    display: flex;
    justify-content: flex-start;
    margin: 30px 0 15px;
    border-top : 5px solid #2d8fdd;
    padding: 15px;
    background-color: #F2F2F2;
}
.sec-content{
    padding: 20px;
    margin: 15px;
    border: 1px solid #dbdbdc;
    border-top : 5px solid #7db4e6;
    background-color: #fff;
}
.third-content{
    padding: 20px;
    margin: 15px;
    border: 1px solid #dbdbdc;
}

.top{
   display: flex;
   justify-content: flex-start;
   margin-top:10px;
}
.input1{
    margin-left: 10px;
    width:100%;
}
.input2{
    margin :0 10px 2px 3px;
    width:100%;
}
.input3{
    margin-left: 5px;
    width: 30%;
}

.badge{
    height: 35px;
    font-size: 18px;
}

.item1{
    display: flex;
    margin-top: 5px;
}

.item2{
    display: flex;
    flex-direction: column;
}

.badge-space{
    margin-bottom: 3px;
}
.deletebutton{
    display: flex;
    justify-content: flex-end;
}
.newbutton{
    margin-top: 10px;
    margin-right: 35px;
    display: flex;
    justify-content: flex-end;
}

.radiobutton{
    width: 25px;
    height:25px;
    margin: 6px 5px 10px 30px;
    
}
label{
    margin-top: 6px;
}

.buttons{
    display: flex;
    justify-content: flex-end;
    margin-right:10px;
}
.save-button{
    display: flex;
    justify-content: flex-end;
    margin-right: 10px;
}



    
</style>