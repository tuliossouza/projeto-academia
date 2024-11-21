import mysql.connector

def salvar_ficha(nome, idade, peso, altura):
    conn = mysql.connector.connect(
        host="localhost",
        user="seu_usuario",
        password="sua_senha",
        database="academia"
    )
    cursor = conn.cursor()
    query = "INSERT INTO alunos (nome, idade, peso, altura) VALUES (%s, %s, %s, %s)"
    values = (nome, idade, peso, altura)
    cursor.execute(query, values)
    conn.commit()
    cursor.close()
    conn.close()

# Exemplo de uso
salvar_ficha("João", 25, 70, 175)