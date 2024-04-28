from django.db import models
from django.contrib.auth.models import User

class fuel(models.Model):
    tipo = models.CharField(max_length=50, unique=True)
    valor_litro = models.DecimalField(max_digits=10, decimal_places=2)

    def __str__(self):
        return self.tipo

class pump(models.Model):
    tipo_combustivel = models.ForeignKey(fuel, on_delete=models.CASCADE)
    localizacao = models.CharField(max_length=50)

    def __str__(self):
        return f"Bomba {self.id} - {self.tipo_combustivel.tipo}"

class fuelsale(models.Model):
    bomba = models.ForeignKey(pump, on_delete=models.CASCADE)
    usuario = models.ForeignKey(User, on_delete=models.CASCADE)
    quantidade_litros = models.DecimalField(max_digits=10, decimal_places=2)
    valor_total = models.DecimalField(max_digits=10, decimal_places=2, null=True, blank=True)
    data_hora_saida = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        return f"Venda na bomba {self.bomba.id} - {self.data_hora_saida}"

    def save(self, *args, **kwargs):
        if not self.valor_total:
            valor_litro_combustivel = self.bomba.tipo_combustivel.valor_litro
            self.valor_total = self.quantidade_litros * valor_litro_combustivel
        super(fuelsale, self).save(*args, **kwargs)
