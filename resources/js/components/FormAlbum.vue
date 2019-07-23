<template>
<v-form action="/albums" method="post" enctype="multipart/form-data">
    <v-container grid-list-md>
        <v-layout row wrap>
            <v-flex xs6>
                <!-- token -->
                <input type="hidden" name="_token" :value="csrf" />
                <!-- title name -->
                <label for="name">앨범명</label>
                <v-text-field id="name" solo name="name" placeholder="앨범명을 입력해주세요"></v-text-field>
                <!-- description -->
                <label for="desc">내용</label>
                <v-textarea id="desc" solo name="desc" label="내용을 입력해주세요"></v-textarea>
            </v-flex>
            <v-flex xs6>
                <!-- image upload -->
                <div id="app">
                    <h2>Select image</h2>
                    <input type="file" id="file" name="imageFile">
                    <input type="submit" value="입력 완료">
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
            image: '',
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    },
}
</script>

<style>
#app {
    /* text-align: center; */
}
</style>
