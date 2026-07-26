# Lab Environment

## Assessment Environment

This vulnerability assessment was conducted in a controlled VMware virtual lab environment.

## Virtualization Platform

- Platform: VMware Workstation
- Network Mode: NAT
- VMware NAT Network: 192.168.126.0/24
- VMware NAT Gateway: 192.168.126.2

## Assessment Machine

- Operating System: Kali Linux
- Role: Security Assessment Machine
- IP Address: 192.168.126.128

## Target Machine

- Operating System: Windows 10
- Role: Assessment Target
- IP Address: 192.168.126.129

## Network Connectivity

The Kali Linux and Windows 10 virtual machines are connected to the same VMware NAT network.

Connectivity was verified between the two virtual machines.

### Windows 10 to Kali Linux

- Source: 192.168.126.129
- Destination: 192.168.126.128
- Result: Successful
- Packet Loss: 0%

### Kali Linux to Windows 10

- Source: 192.168.126.128
- Destination: 192.168.126.129
- Result: ICMP Echo Request was not answered

The Windows 10 system was able to communicate with the VMware NAT gateway, indicating that the virtual network was functioning correctly. The lack of ICMP response from Windows 10 may be related to Windows Firewall configuration.

## Scope

The assessment is limited to the Windows 10 virtual machine at:

192.168.126.129

The system is owned and controlled by the lab operator and is used exclusively for authorized security testing and educational purposes.