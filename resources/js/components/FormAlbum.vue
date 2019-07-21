<template>
<v-container>
    <v-layout row wrap>
        <v-flex xs12>
            <form action="/albums" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" :value="csrf" />
                <label for="name">이름</label>
                <input type="text" name="name" placeholder="입력해">
                <div id="app">
                    <div v-if="!image">
                        <h2>Select image</h2>
                        <input type="file" id="file" name="imageFile" @change="onFileChange">
                    </div>
                    <div v-else>
                        <img :src="image" />
                        <button @click="removeImage">Remove image</button>
                    </div>
                    <input type="submit" value="입력 완료">
                </div>
            </form>
        </v-flex>
    </v-layout>
</v-container>
</template>

<script>
export default {
    data() {
        return {
            image: '',
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    },
    methods: {
        createImage(file) {
            var image = new Image();
            var reader = new FileReader();
            var vm = this;

            reader.onload = (e) => {
                vm.image = e.target.result;
            };
            reader.readAsDataURL(file);
        },
        onFileChange(e) {
            var files = e.target.files;
            if (!files.length)
                return;
            this.createImage(files[0]);
        },
        removeImage(e) {
            this.image = '';
        }
    }
}
</script>

<style>
#app {
    text-align: center;
}

img {
    width: 30%;
    margin: auto;
    display: block;
    margin-bottom: 10px;
}
</style>
