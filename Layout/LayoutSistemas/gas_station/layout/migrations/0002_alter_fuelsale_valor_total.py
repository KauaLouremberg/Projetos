# Generated by Django 3.2.25 on 2024-04-28 13:30

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('layout', '0001_initial'),
    ]

    operations = [
        migrations.AlterField(
            model_name='fuelsale',
            name='valor_total',
            field=models.DecimalField(blank=True, decimal_places=2, max_digits=10, null=True),
        ),
    ]
