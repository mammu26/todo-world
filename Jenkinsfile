pipeline {
	agent any 
    
      stages {
            stage('Init') {
                  steps {
                        echo 'We are Starting the Build'
                  }
            }
            stage('Build') {
                  agent  docker 
        steps {
						echo 'Building Sample Dotnet core Project'
   							sh 'chmod +x scripts/build.sh'
							sh 'scripts/build.sh'
							
							
						
                        
                  }
            }
            stage('Deploy') {
                  steps {
                        echo "Deploying in AWS ECS"
						sh 'scripts/deploy.sh'
						
                  }
            }
            }
}
