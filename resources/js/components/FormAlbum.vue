<template>
<v-form action="/albums" method="post" enctype="multipart/form-data">
    <v-container grid-list-md>
        <v-layout row wrap>
            <v-flex xs5>
                <!-- token -->
                <input type="hidden" name="_token" :value="csrf" />
                <!-- title name -->
                <label for="name">앨범명</label>
                <v-text-field id="name" solo name="name" placeholder="앨범명을 입력해주세요"></v-text-field>
                <!-- description -->
                <label for="desc">내용</label>
                <v-textarea id="desc" solo name="desc" label="내용을 입력해주세요"></v-textarea>
            </v-flex>
            <v-flex xs7>
                <!-- image upload -->
                <div id="app">
                    <h2 class="file-upload-form">Select image</h2>
                    <input type="file" id="file" name="imageFile" @change="previewImage" accept="image/*">
                    <div class="image-preview" v-if="imageData.length > 0">
                        <img class="preview" :src="imageData">
                    </div>
                    <!-- <v-file-input type="file" id="file" label="파일명" prepend-icon="camera_alt"></v-file-input> -->
                    <div>
                        <input type="submit" id="submit_btn" value="입력 완료">
                    </div>
                </div>
            </v-flex>
        </v-layout>
    </v-container>
</v-form>
</template>

<script>
export default {
    data() {
        return {
            imageData: "",
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    },
    methods: {
        previewImage: function (event) {
            //DOM input 요소에 대한 참조
            var input = event.target;
            //파일의 유무를 확인
            if (input.files && input.files[0]) {
                // 이미지를 읽고 인코딩(base64)하기위한 FileReader 객체 생성
                var reader = new FileReader();
                // onload로 파일 리딩 확인
                reader.onload = function (e) {
                    return this.imageData = e.target.result;
                }.bind(this);
                // reader.onload => (e){
                //     this.imageData = e.targer.result;
                // }
                //data url로 파일 읽기
                reader.readAsDataURL(input.files[0]);
            }
        }
    }
}
</script>

<style>
#app {
    /* text-align: center; */
}

#file,
#submit_btn {
    padding: 20px;
}

.file-upload-form,
.image-preview,
.sumbmit_btn {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    padding: 20px;
}

img.preview {
    width: 200px;
    background-color: white;
    border: 1px solid #DDD;
    padding: 5px;
}
</style>
