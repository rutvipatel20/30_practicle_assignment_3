const express = require('express');
const axios = require('axios');

const app = express();
const port = 3000;

app.get('/users', async (req, res) => {
  try {
    const phpApiUrl = 'http://localhost/ICT_06/Q6/index.php'; 
    const response = await axios.get(phpApiUrl);

    res.json(response.data);
  } catch (error) {
    console.error(error);
    res.status(500).json({ error: 'Error calling PHP API' });
  }
});

app.listen(port, () => {
  console.log(`Express server is running on port ${port}`);
});
