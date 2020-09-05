<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">User page</div>

          <div class="card-body">User name (url parameter): {{username}}</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["username"],
};
</script>