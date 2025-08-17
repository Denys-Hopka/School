import mysql from 'mysql2'

const pool = mysql.createPool({
    host: 'localhost',
    user: 'db',
    password: 'db',
    database: 'db'
}).promise()

const result = await pool.query("SELECT * FROM students")
console.log(result)