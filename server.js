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

app.get(('/database'), (req, res) => {
	res.render('database')
})

app.get(('/header_home'), (req, res) => {
	res.render('header_home')
})

app.get(('/featured'), (req, res) => {
	res.render('featured')
})

app.get(('/singletomogram'), (req, res) => {
	res.render('singletomogram')
})

app.get(('/contact'), (req, res) => {
	res.render('contact')
})


let port = process.env.PORT || 3001

app.listen(port, () => {
	console.log('Example app listening on port ' + port)
})
