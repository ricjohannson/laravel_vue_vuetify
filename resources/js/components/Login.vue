<template>
    <div class="login-wrapper d-flex align-items-center justify-content-center">
      <div class="login-card shadow-lg p-4">
        <div class="card-header text-center">
          <h2 class="mb-4">Welcome Back!</h2>
        </div>
        <div class="card-body">
          <form @submit.prevent="login">
            <div class="form-group mb-4">
              <label for="email" class="form-label">Email Address</label>
              <input
                type="email"
                class="form-control"
                id="email"
                v-model="email"
                placeholder="Enter your email"
                required
              />
            </div>
            <div class="form-group mb-4">
              <label for="password" class="form-label">Password</label>
              <input
                type="password"
                class="form-control"
                id="password"
                v-model="password"
                placeholder="Enter your password"
                required
              />
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
          </form>
        </div>
        <div class="card-footer text-center mt-3">
          <small>Don't have an account? <a href="/register">Sign Up</a></small>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  import { useRouter } from 'vue-router';
  
  export default {
    data() {
      return {
        email: '',
        password: '',
      };
    },
    setup() {
      const router = useRouter();
  
      return { router };
    },
    methods: {
      async login() {
        try {
          const response = await axios.post('/api/login', {
            email: this.email,
            password: this.password,
          });
  
          this.$router.push({ name: 'dashboard' });
        } catch (error) {
          alert(error.response.data.message);
        }
      },
    },
  };
  </script>
  
  <style scoped>
  .login-wrapper {
    height: 100vh;
    background: linear-gradient(135deg, #667eea, #764ba2);
  }
  
  .login-card {
    width: 100%;
    max-width: 400px;
    background-color: white;
    border-radius: 15px;
  }
  
  .card-header {
    border-bottom: none;
  }
  
  .card-body {
    padding: 2rem;
  }
  
  .card-footer {
    border-top: none;
  }
  
  .form-control {
    border-radius: 8px;
    padding: 10px;
    border: 1px solid #ced4da;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
  }
  
  .btn-primary {
    background-color: #667eea;
    border-color: #667eea;
    transition: background-color 0.3s ease;
  }
  
  .btn-primary:hover {
    background-color: #764ba2;
    border-color: #764ba2;
  }
  
  h2 {
    color: #667eea;
  }
  
  a {
    color: #764ba2;
  }
  
  a:hover {
    color: #667eea;
    text-decoration: underline;
  }
  </style>
  