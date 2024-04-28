from django import forms
from .models import fuelsale

class fuelsaleform(forms.ModelForm):
    class Meta:
        model = fuelsale
        fields = ['bomba', 'usuario', 'quantidade_litros']
