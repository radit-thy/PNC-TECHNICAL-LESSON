<template>
  <div class="container">
    <h1>List Category</h1>
    <form @submit.prevent="createCategory">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input
          type="text"
          class="form-control"
          id="name"
          aria-describedby="emailHelp"
          v-model="data.name"
        />
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" rows="3" v-model="data.description"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <ul class="list-group mt-4">
      <li
        class="list-group-item"
        v-for="category in categories"
        :key="category.id"
      >
        <h4>{{ category.name }}</h4>
        <p>{{ category.description }}</p>
        <button class="btn btn-info btn-sm m-2" data-bs-toggle="modal" data-bs-target="#showDetail">Show Details</button>
        <button class="btn btn-secondary btn-sm m-2" data-bs-toggle="modal" data-bs-target="#editProduct">Edit</button>
        <button
          class="btn btn-danger btn-sm m-2"
          @click="deleteCategory(category.id)"
        >
          Delete
        </button>
      </li>
    </ul>
  </div>
  <!-- ========================================================================= -->
                                  <!-- Modal -->
                                  <!-- show detail -->
<!-- ========================================================================= -->

<div class="modal fade" id="showDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Details Product</h5>
      </div>
      <div class="modal-body">
        
        <p>Name: {{name}}</p>
        <p>description: {{description}}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
      </div>
    </div>
  </div>
</div>
  <!-- ========================================================================= -->
                                  <!-- Modal -->
                                  <!-- edit product -->
<!-- ========================================================================= -->

<div class="modal fade" id="editProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit The Product</h5>
      </div>
      <div class="modal-body">
        
         <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input
          type="text"
          class="form-control"
          id="name"
          aria-describedby="emailHelp"
          v-bind="data.name"
        />
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" rows="3" v-bind="data.description"></textarea>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      data: {
        name: "",
        description: "",
      },
      categories: [],
      editingCategory: null,
    };
  },
  methods: {
    async fetchCategories() {
      try {
        const response = await axios.get(
          "http://127.0.0.1:8000/api/category/list"
        );
        if (response.data.success) {
          console.log(response.data.data);
          this.categories = response.data.data;
        }
      } catch (error) {
        console.error("Error fetching categories:", error);
      }
    },
    async createCategory (){
      try {
        const response = await axios.post(
          "http://127.0.0.1:8000/api/category/create",
          this.data
        ); 
        // console.log(response);
        if(response.data.success){
          this.data.name ="";
          this.data.description ="";
          this.fetchCategories();
        }
      }catch(error){
        console.error("Error creating category:", error);
      }
    },
  },
  mounted() {
    this.fetchCategories();
  },
};
</script>

<style>
</style>