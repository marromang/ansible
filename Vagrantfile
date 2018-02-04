# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

 config.vm.define :nodo1 do |nodo1|
    nodo1.vm.box = "debian/stretch64"
    nodo1.vm.hostname = "nodo1"
    nodo1.vm.network :private_network, ip: "192.168.1.11"
    nodo1.vm.network :private_network, ip: "10.0.0.11",
    	virtualbox__intnet: "ansible"
    nodo1.vm.provision "ansible" do |ansible|
	   ansible.playbook = "playbook/nodo1/main.yml"
    end
   end

 config.vm.define :nodo2 do |nodo2|
   nodo2.vm.box = "debian/stretch64"
    nodo2.vm.hostname = "nodo2"
    nodo2.vm.network :private_network, ip: "192.168.1.12"
    nodo2.vm.network :private_network, ip: "10.0.0.12",
    	virtualbox__intnet: "ansible"
    nodo2.vm.provision "ansible" do |ansible|
        ansible.playbook = "playbook/nodo2/main.yml"
    end
 end

end