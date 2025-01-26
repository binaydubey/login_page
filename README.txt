#to start Application
sudo docker-compose up --build -d

#To stop application
sudo docker-compose down


#Steps to Resolve the Issue:
#Remove Existing Containers: The issue may be caused by stale or corrupted containers. Remove the existing containers forcefully:

docker-compose down --volumes
docker rm -f $(docker ps -aq)

#Prune Docker System (Optional): If the issue persists, clean up unused Docker resources:
docker system prune --all --volumes --force
