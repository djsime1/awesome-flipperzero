import subprocess

def install_library(library):
    subprocess.call(f'pip install {library}', shell=True)

libraries = ['pillow', 'imageio']

for library in libraries:
    install_library(library)

print("All required libraries have been successfully installed!")

