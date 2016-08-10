# Orquestrando a implementação do Wordpress com Ansible.

* Esta orquestração foi construída para o Debian 8.
- Informações visite o blog:
- http://tutoriaisgnulinux.com

## Para baixar o repositório basta instalar o wget e o git.
<pre>
# apt-get install git wget -y
</pre>

## Para rodar o playbook basta instalar o Ansible.
<pre>
# apt-get install ansible -y
</pre>

* Antes de rodar o playbook configure os arquivos hosts e variaveis de acordo com o seu ambiente.

## Rodando o playbook.
<pre>
# ansible-playbook -i hosts site.yml
</pre>

