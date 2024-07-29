const express = require('express');
const app = express();
app.listen(process.env.PORT || 3000);

app.use(express.static('public'));

const userRoute = require('./routes/userRoute');
app.use('/api/users', userRoute);