# Initial Network Assessment Report

## 1. Executive Summary

This report documents the initial network assessment performed against an authorized Windows 10 virtual machine in an isolated cybersecurity lab environment.

The assessment was conducted using Kali Linux as the security assessment machine and Nmap as the network scanning tool.

The objective was to verify network connectivity, determine whether the target system was reachable, and identify the status of commonly scanned TCP ports.

The target system was reachable on the lab network. However, all 1,000 TCP ports scanned by Nmap were reported as filtered, indicating that inbound connection attempts were being filtered or blocked.

---

## 2. Assessment Objective

The objectives of this assessment were:

- Verify network connectivity between Kali Linux and the Windows 10 target.
- Confirm that the target system was reachable.
- Perform an initial TCP port scan.
- Identify accessible, closed, or filtered network ports.
- Establish a baseline for future security assessments.
- Collect evidence for documentation.

---

## 3. Lab Environment

### Assessment Machine

- Operating System: Kali Linux
- Role: Security Assessment Machine
- IP Address: 192.168.126.128
- Tool Used: Nmap

### Target Machine

- Operating System: Windows 10
- Role: Vulnerability Assessment Target
- IP Address: 192.168.126.129

### Network Configuration

- Virtualization Platform: VMware
- Network Mode: NAT
- Network: 192.168.126.0/24

---

## 4. Methodology

The assessment was performed in the following stages:

1. Verified the IP configuration of both virtual machines.
2. Verified network connectivity between Kali Linux and Windows 10.
3. Performed an Nmap service detection scan against the authorized Windows 10 target.
4. Recorded the scan results.
5. Saved the Nmap output as evidence.
6. Captured a screenshot of the scan results.


The following command was used:

```bash
nmap -sV 192.168.126.129

```
---

## 5. Target Information

The target system used for this assessment was a Windows 10 virtual machine configured within the authorized VMware cybersecurity lab environment.

The following information was collected during the initial network verification:

| Parameter | Value |
|---|---|
| Target IP Address | 192.168.126.129 |
| Target Operating System | Windows 10 |
| Assessment Machine | Kali Linux |
| Assessment IP Address | 192.168.126.128 |
| Network | 192.168.126.0/24 |
| Virtualization Platform | VMware |
| Network Mode | NAT |
| Assessment Tool | Nmap |
| Scan Type | Service Version Detection |

---

## 6. Nmap Results

The initial Nmap service detection scan was performed against the authorized Windows 10 target using the following command:

```bash
nmap -sV 192.168.126.129

```

### Scan Output Summary

The Nmap scan identified the target system as reachable on the network.

The scan results showed that all 1,000 TCP ports scanned were in filtered states. No accessible TCP services were identified during this initial scan.

The filtered status indicates that the target system or an intermediate network control is not responding to the Nmap connection attempts. This behavior is commonly associated with firewall filtering or network access controls.

The initial scan therefore established that the Windows 10 target was reachable, but its commonly scanned TCP ports were not directly accessible from the Kali Linux assessment machine.

### Evidence

The following evidence was collected during the assessment:

- Nmap scan output: `Evidence/Network-Verification/windows10-initial-scan.txt`
- Screenshot of the initial Nmap scan: `Screenshots/01-initial-nmap-scan.png`


---

## 7. Findings and Initial Security Assessment

Based on the initial Nmap service detection scan, the following findings were identified:

### Finding 1: Target System Reachable

The Windows 10 target system was successfully identified as reachable from the Kali Linux assessment machine.

**Status:** Confirmed

### Finding 2: TCP Ports Filtered

All 1,000 TCP ports scanned by Nmap were reported as filtered.

**Status:** Observed

This indicates that the scanned ports were not responding to the connection attempts from the assessment machine. The result may be caused by Windows Firewall or another network-level filtering mechanism.

### Finding 3: No Accessible Services Identified

The initial scan did not identify any accessible TCP services on the 1,000 commonly scanned ports.

**Status:** No services identified during initial scan

This result does not confirm that the Windows 10 system has no services running. It only indicates that no accessible services were detected by this particular scan from the Kali Linux assessment machine.

### Initial Security Assessment

The initial network assessment indicates that the Windows 10 target has effective network-level filtering enabled for the scanned TCP ports.

No confirmed vulnerability was identified during this initial network scan.

Further authorized security assessment and configuration review may be required to identify potential vulnerabilities, misconfigurations, or security weaknesses that are not visible through the initial network scan.

---

## 8. Risk Assessment

Based on the findings from the initial network assessment, the following risk observations were recorded:

| Finding | Risk Level | Assessment |
|---|---|---|
| Target system reachable | Informational | The target is accessible on the isolated lab network. |
| TCP ports filtered | Low | Network filtering reduces direct exposure of commonly scanned TCP ports. |
| No accessible services identified | Informational | No accessible services were detected during the initial scan; this does not confirm that no services are running on the target. |

### Overall Initial Risk Assessment

The initial assessment indicates a **low observed network exposure** from the Kali Linux assessment machine because the commonly scanned TCP ports were reported as filtered.

However, this assessment is limited to the results of the initial Nmap scan. It does not represent a complete vulnerability assessment of the Windows 10 system.

Further authorized testing is required to evaluate:

- Host-based security configuration.
- Windows Firewall rules.
- Running services and applications.
- Installed software and versions.
- System security settings.
- Potential vulnerabilities and misconfigurations.


---

## 9. Conclusion and Next Steps

### Conclusion

The initial network assessment successfully verified communication between the Kali Linux assessment machine and the authorized Windows 10 target within the isolated VMware lab environment.

The Nmap service detection scan confirmed that the target system was reachable. However, all 1,000 commonly scanned TCP ports were reported as filtered, and no accessible TCP services were identified during the initial assessment.

The results indicate that network-level filtering is currently limiting direct access to the target's commonly scanned TCP ports.

No confirmed vulnerability was identified during this initial network assessment. The findings documented in this report establish a baseline for subsequent authorized security testing.

### Next Steps

The following activities are recommended for the next phase of the authorized cybersecurity assessment:

1. Perform additional authorized network enumeration if required.
2. Review the Windows Firewall configuration on the target system.
3. Identify locally running services and applications on the Windows 10 system.
4. Review installed software and software versions.
5. Perform an authorized vulnerability assessment using appropriate security tools.
6. Document any identified vulnerabilities and security misconfigurations.
7. Capture supporting evidence for each confirmed finding.
8. Update the security assessment report with the results of subsequent testing.

**Assessment Status:** Initial Network Assessment Completed

**Next Phase:** Authorized Vulnerability Assessment and Security Configuration Review
