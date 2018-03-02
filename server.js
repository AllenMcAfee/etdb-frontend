'use strict'

const express = require('express')
const path = require('path')

const app = express()

app.use(express.static(path.resolve(__dirname)))

app.set('view engine', 'pug')

app.get(('/'), (req, res) => {
	res.render('index')
})

app.get(('/about'), (req, res) => {
	res.render('about')
})

app.get(('/page-searchresults'), (req, res) => {
	res.render('page-searchresults')
})

let port = process.env.PORT || 3001

app.listen(port, () => {
	console.log('Example app listening on port ' + port)
})
