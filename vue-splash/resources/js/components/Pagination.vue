<template>
  <div class="pagination">
    <RouterLink
     v-fi="! isFirstPage"
     :to="`/?page=${currentPage - 1}`"
     class="button"
    >&laquo; prev</RouterLink>
    <RouterLink
     v-fi="! isLastPage"
     :to="`/?page=${currentPage + 1}`"
     class="button"
    >next &raquo;</RouterLink>
  </div>
</template>

<script>
export default {
  props: {
    // 現ページ
    currentPage: {
      type: Number,
      required: true
    },
    // 総ページ
    lastPage: {
      type: Number,
      required: true
    }
  },
  computed: {
    isFirstPage () {
      return this.currentPage === 1
    },
    isLastPage () {
      return this.currentPage === this.lastPage
    }
  }
}
</script>
