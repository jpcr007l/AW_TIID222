def factorial(n):
    if n < 0:
        raise ValueError("n debe ser un entero no negativo")
    if n <= 1:
        return 1
    return n * factorial(n - 1)


print(factorial(5))
