# Generated by Django 4.1.4 on 2023-04-26 18:29

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('Clientes', '0001_initial'),
    ]

    operations = [
        migrations.AlterField(
            model_name='cliente',
            name='apellidos',
            field=models.CharField(max_length=90),
        ),
        migrations.AlterField(
            model_name='cliente',
            name='correo',
            field=models.CharField(max_length=100),
        ),
        migrations.AlterField(
            model_name='cliente',
            name='direccion',
            field=models.CharField(max_length=150),
        ),
        migrations.AlterField(
            model_name='cliente',
            name='nombres',
            field=models.CharField(max_length=50),
        ),
    ]
