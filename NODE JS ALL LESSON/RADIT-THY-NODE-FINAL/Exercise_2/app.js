const express = require('express');
const { v4: uuidv4 } = require('uuid');
const {getData,save} = require("./utils/function")
const app = express();
const port = 3000;
app.use(express.json());
app.listen(port, () => {
    console.log(`Example app listening at http://localhost:${port}`)

});
let posts = getData("./database/posts.json");

app.get('/', (req, res) => {
   // TODO
    res.json({status:200,message:"Api is working",endpoint:"/api/posts"});
})
/**
 * Description: CRUD posts
 * Endpoint: /api/posts
 */

// Get posts
app.get('/api/posts', (req, res) => {
   // TODO
   let id = req.body;
   let post = posts.find(post => post.id === id);
   if(post !==undefined){
       res.json({message:"post is found", post:post});
   }else{
       res.status(400).send({message:"post not found"});
   }

});


// Get one post
app.get('/api/posts/:id', (req, res) => {
    // TODO
    let id = req.params.id;
    let post = posts.find(post => post.id === id);
    if(post !=undefined){
        res.json({message:"post one found", post:post});
    }else{
        res.status(400).send({message:"post not found"});
    }

});

// Create a new post
app.post('/api/posts', (req, res) => {
    // TODO
    const {title,description,isExpired} = req.body;
    let newPost ={
        id:uuidv4(),
        title:title,
        description:description,
        isExpired:isExpired
    }
    posts.push(newPost);
    save("./database/posts.json",posts);
    res.json({message:"post create successful",posts:newPost});
});

// Delete post
app.delete('/api/posts/:id', (req, res) => {
    // TODO
    let id = req.params.id;
    let index = posts.findIndex(post => post.id === id);
    if(index != -1){
        posts.splice(index, 1);
        save("./database/posts.json",posts);
        res.json({message:"post delete successful"});
    }
    res.json({message:"post delete not successful",posts:index});
});

// Update a post
app.put('/api/posts/:id', (req, res) => {
    // TODO
    let id = req.params.id;
    let index = posts.findIndex(post => post.id === id);
    if(index != -1){
        let post = posts[index];
        post.title = req.body.title;
        post.description = req.body.description;
        post.isExpired = req.body.isExpired;
        save("./database/posts.json",posts);
        res.json({message:"post update successful",post:post});
    }
    res.status(400).send({message:"post update not found",item:index})
});