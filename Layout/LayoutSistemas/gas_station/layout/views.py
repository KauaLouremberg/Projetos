from django.shortcuts import render, redirect
from .models import fuel, pump, fuelsale
from .form import fuelsaleform
from django.urls import reverse



def vendas_registradas(request):
    vendas = fuelsale.objects.all()
    return render(request, 'vendas_registradas.html', {'vendas': vendas})



def index(request):
    combustiveis = fuel.objects.all()
    bombas = pump.objects.all()
    vendas = fuelsale.objects.all()

    if request.method == 'POST':
        form = fuelsaleform(request.POST)
        if form.is_valid():
            form.save()
            return redirect('.')
    else:
        form = fuelsaleform()

    return render(request, 'index.html',
                  {'combustiveis': combustiveis, 'bombas': bombas, 'vendas': vendas, 'form': form})



