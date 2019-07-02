<template>
    <div>
  <v-toolbar color="teal darken-4">
    
    <v-toolbar-side-icon  @click.stop="drawer = !drawer" class="white hidden-md-and-up"></v-toolbar-side-icon>


    
    <v-toolbar-title class="white--text">Welcome:)</v-toolbar-title>

    <v-spacer></v-spacer>

    <v-btn flat class="white--text hidden-sm-and-down">
      My projects
    </v-btn>

    <v-btn flat class="white--text hidden-sm-and-down">
      My CV
    </v-btn>
    
    <v-btn flat class="white--text hidden-sm-and-down">
      My experience
    </v-btn>

    <v-btn flat class="white--text hidden-sm-and-down">
      Contact me
    </v-btn>
  </v-toolbar>
  <v-navigation-drawer
    class="teal darken-3"
      v-model="drawer"
      absolute
      temporary
      dark
    >
      

      <v-list >
        <v-list-tile  href="/">
            <v-list-tile-title > Ptoject</v-list-tile-title>
            
        </v-list-tile>
      </v-list>
    </v-navigation-drawer>
    </div>
</template>

<script>
  export default {
    data () {
      return {
        drawer: null,
        
      }
    }
  }
</script>
<style>
    
</style>
